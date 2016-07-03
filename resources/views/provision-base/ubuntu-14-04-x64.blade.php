#!/bin/bash
export DEBIAN_FRONTEND=noninteractive
set -e # Error out on any errors

echo 'root:{{ $rootPasswordEscaped }}' | chpasswd

export INSTALLPATH="{{ $installpath }}"
export NAME="{{ $name }}"
export GITURL="https://github.com/${NAME}.git"
export DOMAIN="{{ $domain }}"
export IPV4="{{ $ipv4 }}"

apt-get -y clean
cd /var/lib/apt
mv lists lists.old
mkdir -p lists/partial
apt-get -y clean
apt-get -y update

apt-get -y install git

mkdir -p $INSTALLPATH
cd $INSTALLPATH
git clone --depth 1 $GITURL .
