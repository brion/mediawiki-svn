#
# spec file for package TSlibogg
#
# includes module(s): libogg

%include Solaris.inc

Name:                    TSlibogg
Summary:                 Xiph Ogg library
Version:                 1.1.3
Source:                  http://downloads.xiph.org/releases/ogg/libogg-%{version}.tar.gz
SUNW_BaseDir:            %{_basedir}
BuildRoot:               %{_tmppath}/%{name}-%{version}-build

%include default-depend.inc

%ifarch amd64 sparcv9
%include arch64.inc
%use libogg64=libogg.spec
%endif
%include base.inc
%use libogg=libogg.spec

%package devel
Summary:		 %{summary} - development files
SUNW_BaseDir:            %{_basedir}
%include default-depend.inc
Requires:		 %name

%prep
rm -rf %name-%version
mkdir %name-%version

%ifarch amd64 sparcv9
mkdir %name-%version/%_arch64
%libogg64.prep -d %name-%version/%_arch64
%endif

mkdir %name-%version/%{base_arch}
%libogg.prep -d %name-%version/%{base_arch}

%build
CPUS=`/usr/sbin/psrinfo | grep on-line | wc -l | tr -d ' '`
if test "x$CPUS" = "x" -o $CPUS = 0; then
    CPUS=1
fi

export CC="cc"
export CXX="CC"
export CPPFLAGS="-I/usr/sfw/include"
export MSGFMT="/usr/bin/msgfmt"

%ifarch amd64 sparcv9
%include arch64.inc
export CFLAGS="%optflags -m64 -I/usr/sfw/include -DANSICPP -L/usr/sfw/lib/%_arch64"
export RPM_OPT_FLAGS="$CFLAGS"
export LDFLAGS="-m64 -L/usr/sfw/lib/%_arch64 -R/usr/sfw/lib/%_arch64"
%libogg64.build -d %name-%version/%_arch64
%endif
%include base.inc
export LDFLAGS="-L/usr/sfw/lib -R/usr/sfw/lib"
export CFLAGS="%optflags -I/usr/sfw/include -DANSICPP -L/usr/sfw/lib"
export RPM_OPT_FLAGS="$CFLAGS"
%libogg.build -d %name-%version/%{base_arch}

%install
%ifarch amd64 sparcv9
%libogg64.install -d %name-%version/%_arch64
rm -f $RPM_BUILD_ROOT%{_libdir}/%_arch64/*.la
rm -f $RPM_BUILD_ROOT%{_libdir}/%_arch64/*.a
%endif

%libogg.install -d %name-%version/%{base_arch}
rm -f $RPM_BUILD_ROOT%{_libdir}/*.la
rm -f $RPM_BUILD_ROOT%{_libdir}/*.a

%clean
rm -rf $RPM_BUILD_ROOT

%files
%defattr (-, root, bin)
%dir %attr (0755, root, bin) %{_libdir}
%{_libdir}/lib*.so*
%dir %attr(0755, root, sys) %{_datadir}
%ifarch amd64 sparcv9
%dir %attr (0755, root, bin) %{_libdir}/%_arch64
%{_libdir}/%_arch64/lib*.so*
%endif

%files devel
%defattr (-, root, bin)
%dir %attr (0755, root, bin) %{_includedir}
%{_includedir}/*
%dir %attr(0755, root, sys) %{_datadir}
%dir %attr(0755, root, other) %{_datadir}/doc
%dir %attr(0755, root, other) %{_datadir}/doc/libogg-%{version}
%{_datadir}/doc/libogg-%{version}/*
%dir %attr(0755, root, other) %{_datadir}/aclocal
%{_datadir}/aclocal/*
%dir %attr (0755, root, bin) %{_libdir}
%dir %attr (0755, root, other) %{_libdir}/pkgconfig
%{_libdir}/pkgconfig/*
%ifarch amd64 sparcv9
%dir %attr (0755, root, other) %{_libdir}/%_arch64/pkgconfig
%{_libdir}/%_arch64/pkgconfig/*
%endif

%changelog
* Fri Feb 20 2009 - river@loreley.flyingparchment.org.uk
- initial spec
