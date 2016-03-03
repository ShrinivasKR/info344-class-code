split .\wordsEn.txt chunks/chunk
go run .\goparallel.go ./data
go run .\goparallel.go ./data/chunks
go run .\goparallel.go