package main

import (
    "os"
    "encoding/csv"
    "log"
    "fmt"
)

//MetaData stores information about the zipcode database
type MetaData struct {
    ZipCode string
    NumRecords  int
    UniqueTypes int
}

func main() {
    csvfile, err := os.Open("zip_code_database.csv")

    if err != nil {
            log.Fatal("Cannot open CSV")
            return
    }
    
    defer csvfile.Close()

    reader := csv.NewReader(csvfile)

    reader.FieldsPerRecord = -1 // see the Reader struct information below

    rawCSVdata, err := reader.ReadAll()

    if err != nil {
            log.Fatal("Cannot read CSV")
    }

    // sanity check, display to standard output
    for _, each := range rawCSVdata {
        fmt.Printf("zip : %s\n", each[0])
        resp := MetaData {
            ZipCode: each[0],
            Message: "Hello " + name,
            UniqueTypes: time.Now()}
    }   
    
    
}