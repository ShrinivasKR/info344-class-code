package main

import (
    "fmt"
    "net/http"
    "time"
    "sync"
)

// MyStruct stores data
type MyStruct struct {
    value int
    // allows people to read from the trie while its still being loaded but locks it down when its being written to
    // equivalent to set value when adding to a trie, unlock when done
    // call r lock when getting a suggestion from a trie
    mx sync.RWMutex    
}

// SetValue sets a value while declaring MyStruct as a reciever function
func (m *MyStruct) SetValue(val int) {
    m.mx.Lock()
    m.value = val
    m.mx.Unlock()
}

// GetValue blocks all other blocks from reading until the write has completed
func (m *MyStruct) GetValue() int {
    m.mx.RLock()
    defer m.mx.RUnlock()
    return m.value
}

var _mystruct MyStruct

// loadMyStruct loads the struct
func loadMyStruct() {
    //simulates a long loading process
    time.Sleep(5 * time.Second)  
    _mystruct.SetValue(5)  
}

func getValue(w http.ResponseWriter, r *http.Request) {
    w.Write([]byte(fmt.Sprintf("value is %d", _mystruct.GetValue())))
}

func main() {
    go loadMyStruct()
    
    http.HandleFunc("/", getValue)
    http.ListenAndServe(":9000", nil)
}

// also lookup how channels work, allows multiple go routinues to send messages to each other in a safe way