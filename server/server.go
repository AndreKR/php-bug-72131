package main

import "net/http"

func main() {

	http.HandleFunc("/", func(writer http.ResponseWriter, request *http.Request) {

		writer.Write([]byte("OK"))

		flusher, _ := writer.(http.Flusher)
		flusher.Flush() // Force chunked encoding

	})

	http.ListenAndServe(":80", nil)

}
