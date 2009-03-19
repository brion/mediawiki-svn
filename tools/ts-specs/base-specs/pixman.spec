Name:		TSpixman
Summary:	pixman library
Version:	0.14.0
Source:		http://cairographics.org/releases/pixman-%{version}.tar.gz
SUNW_BaseDir:	%{_basedir}
BuildRoot:	%{_tmppath}/%{name}-%{version}-build

%include default-depend.inc

%prep
rm -rf %name-%version
%setup -q -n pixman-%version

%build

%_configure --disable-gtk
%_make

%install
%_make DESTDIR=${RPM_BUILD_ROOT} install

%clean
rm -rf $RPM_BUILD_ROOT
