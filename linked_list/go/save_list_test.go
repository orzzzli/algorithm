package _go

import (
	"container/list"
	"fmt"
	"sync"
	"testing"
	"time"
)

func TestSafeList_InsertAfter(t *testing.T) {
	start := time.Now().UnixNano()
	l := NewSafeList()
	var wg sync.WaitGroup
	for j := 0; j < 5000; j++ {
		wg.Add(1)
		go func(group *sync.WaitGroup,safeList *SafeList) {
			l.PushBack("a")
			wg.Done()
		}(&wg,l)
	}
	wg.Wait()
	end := time.Now().UnixNano()
	fmt.Println(l.Len())
	fmt.Println(end - start)
}

func TestSafeList_InsertAfterUnsafe(t *testing.T) {
	start := time.Now().UnixNano()
	l := new(list.List)
	var wg sync.WaitGroup
	for j := 0; j < 5000; j++ {
		wg.Add(1)
		go func(group *sync.WaitGroup, list2 *list.List) {
			l.PushBack("a")
			wg.Done()
		}(&wg,l)
	}
	wg.Wait()
	end := time.Now().UnixNano()
	fmt.Println(l.Len())
	fmt.Println(end - start)
}