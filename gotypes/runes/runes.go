package main

import (
    "fmt"
)

func main() {
    s := "Hello, 世界"
    
    // if iterating over the characters of a string, use range
    for idx, r := range s {
        fmt.Println(idx, string(r));
    }
}