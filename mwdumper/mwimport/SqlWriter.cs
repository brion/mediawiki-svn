/*
 * MediaWiki import/export processing tools
 * Copyright 2005 by Brion Vibber
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * $Id$
 */

namespace MediaWiki.Import {
	using System;
	using System.Collections;
	using System.IO;
	using System.Text;

	public abstract class SqlWriter : IDumpWriter {
		protected TextWriter _stream;
		
		public SqlWriter(TextWriter output) {
			_stream = output;
		}
		
		public void Close() {
			_stream.Close();
		}
		
		public void WriteStartWiki() {
			_stream.WriteLine("-- MediaWiki XML dump converted to SQL");
		}
		
		public void WriteEndWiki() {
			_stream.WriteLine("-- DONE");
		}
		
		public void WriteSiteinfo(Siteinfo info) {
			_stream.WriteLine("");
			_stream.WriteLine("-- Site: " + CommentSafe(info.Sitename));
			_stream.WriteLine("-- URL: " + CommentSafe(info.Base));
			_stream.WriteLine("-- Generator: " + CommentSafe(info.Generator));
			_stream.WriteLine("-- Case: " + CommentSafe(info.Case));
			_stream.WriteLine("--");
			_stream.WriteLine("-- Namespaces:");
			foreach (int key in info.Namespaces.Keys) {
				_stream.WriteLine("-- " + key + ": " + info.Namespaces[key]);
			}
			_stream.WriteLine("");
		}
		
		public abstract void WriteStartPage(Page page);
		
		public abstract void WriteEndPage();
		
		public abstract void WriteRevision(Revision revision);
		
		
		
		protected string CommentSafe(string text) {
			// TODO
			return text;
		}
		
		protected object InsertRow(string table, IDictionary row) {
			StringBuilder sql = new StringBuilder();
			bool first;
			
			sql.Append("INSERT INTO ");
			//sql.Append(_tablePrefix);
			sql.Append(table);
			sql.Append(" (");
			
			first = true;
			foreach (string field in row.Keys) {
				if (!first)
					sql.Append(',');
				first = false;
				sql.Append(field);
			}
			sql.Append(") VALUES (");
			
			first = true;
			foreach (object val in row.Values) {
				if (!first)
					sql.Append(',');
				first = false;
				sql.Append(SqlSafe(val));
			}
			sql.Append(");");
			
			_stream.WriteLine(sql);
			return null;
		}
		
		protected void UpdateRow(string table, IDictionary row, string keyField, object keyValue) {
			StringBuilder sql = new StringBuilder();
			bool first;
			
			sql.Append("UPDATE ");
			//sql.Append(_tablePrefix);
			sql.Append(table);
			sql.Append(" SET ");
			
			first = true;
			foreach (string field in row.Keys) {
				if (!first)
					sql.Append(',');
				first = false;
				sql.Append(field);
				sql.Append('=');
				sql.Append(SqlSafe(row[field]));
			}
			
			sql.Append(" WHERE ");
			sql.Append(keyField);
			sql.Append('=');
			sql.Append(SqlSafe(keyValue));
			
			sql.Append(";");
			
			_stream.WriteLine(sql);
		}
		
		protected string SqlSafe(object val) {
			if (val == null)
				return "NULL";
			
			Type type = val.GetType();
			int i = 1;
			double d = 1.0;
			
			string str = val.ToString();
			if (type == str.GetType()) {
				return SqlEscape(str);
			} else if (type == i.GetType()) {
				return str;
			} else if (type == d.GetType()) {
				return str;
			} else {
				throw new ArgumentException("Unknown thingy in SQL");
			}
		}
		
		protected string SqlEscape(string str) {
			StringBuilder sql = new StringBuilder();
			sql.Append('\'');
			int len = str.Length;
			for (int i = 0; i < len; i++) {
				char c = str[i];
				switch (c) {
				case '\u0000':
					sql.Append("\\0");
					break;
				case '\n':
					sql.Append("\\n");
					break;
				case '\r':
					sql.Append("\\r");
					break;
				case '\u001a':
					sql.Append("\\Z");
					break;
				case '"':
				case '\'':
				case '\\':
					sql.Append('\\');
					goto default;
				default:
					sql.Append(c);
					break;
				}
			}
			sql.Append('\'');
			return sql.ToString();
		}
		
		protected string TitleFormat(string title) {
			return title.Replace(' ', '_');
		}
		
		protected string TimestampFormat(DateTime time) {
			DateTime utc = time.ToUniversalTime();
			return string.Format("{0:0000}{1:00}{2:00}{3:00}{4:00}{5:00}",
				utc.Year,
				utc.Month,
				utc.Day,
				utc.Hour,
				utc.Minute,
				utc.Second);
		}
		
		protected string InverseTimestamp(DateTime time) {
			DateTime utc = time.ToUniversalTime();
			return string.Format("{0:0000}{1:00}{2:00}{3:00}{4:00}{5:00}",
				9999 - utc.Year,
				99 - utc.Month,
				99 - utc.Day,
				99 - utc.Hour,
				99 - utc.Minute,
				99 - utc.Second);
		}
	}
}
