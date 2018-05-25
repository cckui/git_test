package main

import "fmt"

func main() {
	var x [5]bool
	x[4] = true
	x[2] = true
	for i, value := range x {
		if value == false {
			fmt.Println(i)
		}

	}
}
