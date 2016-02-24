package main

import (
    "fmt"
    "time"
)

func main() {
    // numbers := [10]int
    // fmt.Println(numbers)
    
    var months [12]string
    for idx := 0; idx < 12; idx++ {
        months[idx] = time.Month(idx + 1    ).String()
    }
    fmt.Println(months[5:])
    
    var dynoMonths []string
    
    for idx := 0; idx < 12; idx ++ {
        dynoMonths = append(dynoMonths, time.Month(idx+1).String())
    }
    fmt.Println(dynoMonths)
    
}