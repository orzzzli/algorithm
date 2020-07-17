package _go

import (
	"fmt"
	"sync"
	"testing"
)

func TestSafeList_InsertAfter(t *testing.T) {
	list := NewSafeList()
	//a := list.PushBack("a")
	//list.PushBack("b")
	//list.PushBack("c")
	//list.PushBack("d")
	//fmt.Println(a.Value)
	//fmt.Println(a.Next().Value)
	//fmt.Println(a.Next().Next().Value)
	//fmt.Println(a.Next().Next().Next().Value)

	var wg sync.WaitGroup
	wg.Add(4)
	go func(group *sync.WaitGroup) {
		list.PushBack("a")
		wg.Done()
	}(&wg)
	go func(group *sync.WaitGroup) {
		list.PushBack("b")
		wg.Done()
	}(&wg)
	go func(group *sync.WaitGroup) {
		list.PushBack("c")
		wg.Done()
	}(&wg)
	go func(group *sync.WaitGroup) {
		list.PushBack("d")
		wg.Done()
	}(&wg)
	wg.Wait()
	fmt.Println(list.Front().Value)
	fmt.Println(list.Front().Next().Value)
	fmt.Println(list.Front().Next().Next().Value)
	fmt.Println(list.Front().Next().Next().Next().Value)
}