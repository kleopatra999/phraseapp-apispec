FROM golang:1.9-rc-alpine

RUN apk update && apk add git

RUN go get -v github.com/campoy/embedmd

ENTRYPOINT ["embedmd"]
