-- Add img_sha1, oi_sha1 and related indexes
ALTER TABLE image
  ADD COLUMN img_sha1 varbinary(31) NOT NULL default '',
  ADD INDEX img_sha1 (img_sha1);

ALTER TABLE oldimage
  ADD COLUMN oi_sha1 varbinary(31) NOT NULL default '',
  ADD INDEX oi_sha1 (oi_sha1);
