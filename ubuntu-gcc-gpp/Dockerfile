FROM ubuntu:18.04

MAINTAINER david2000tsi@gmail.com

RUN apt-get update && \
	apt-get install -y net-tools iputils-ping build-essential git cmake doxygen && \
	git config --global user.name 'John Doe' && \
	git config --global user.email 'johndoe@email.com'

# You should to install 'gitk' and 'git-gui' manually because it needs manual interaction
#RUN apt-get install -y gitk git-gui

WORKDIR /opt

ENTRYPOINT ["/bin/bash"]
