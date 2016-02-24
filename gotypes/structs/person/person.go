package person

import (
    "fmt"
)

type Person struct {
    FirstName string
    LastName string
}

func NewPerson(first string, last string) *Person {
    return &Person{FirstName: first, LastName: last}
}

// func SayHello(person *Person)  {
//     fmt.Println("Hello", person.FirstName, person.LastName)
// }


// Now functions like a method, can be called by any object of type *Person
func (person *Person) SayHello() {
    fmt.Println("Hello", person.FirstName, person.LastName)
}
