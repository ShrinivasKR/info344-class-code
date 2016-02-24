package person // "inheritance", has the same fields of a person, so treated the same, but it isn't enforced as an inheritance, as typesystem doesn't care

type Student struct {
    Person
    Major string
}