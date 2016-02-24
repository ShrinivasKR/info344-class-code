package main

import (
    "github.com/shrinivaskr/info344-class-code/gotypes/structs/person"    
)

func main() {
    // prs := person.Person{FirstName: "Shrinivas", LastName: "Kopparam Ramanath"}
    prs := person.NewPerson("Shrinivas", "Kopparam Ramanath")
    prs.FirstName = "Mr."
    // fmt.Println(person)
    // fmt.Printf("%+v\n", person)
    // person.FirstName = "Mr."
    // fmt.Println(person)
    // fmt.Printf("%+v\n", person)
    
    // person.SayHello(&prs)
    // person.SayHello(prs)
    prs.SayHello()
}