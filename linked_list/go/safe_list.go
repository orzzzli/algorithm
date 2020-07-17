package _go

import (
	"container/list"
	"sync"
)

type SafeList struct {
	lock sync.Mutex
	data *list.List
}

func NewSafeList() *SafeList {
	temp := new(SafeList)
	temp.data = list.New()
	return temp
}

func (s *SafeList) Front() *list.Element {
	return s.data.Front()
}

func (s *SafeList) Back() *list.Element {
	return s.data.Back()
}

func (s *SafeList) PushFront(v interface{}) *list.Element {
	s.lock.Lock()
	defer s.lock.Unlock()
	return s.data.PushFront(v)
}

func (s *SafeList) PushBack(v interface{}) *list.Element {
	s.lock.Lock()
	defer s.lock.Unlock()
	return s.data.PushBack(v)
}

func (s *SafeList) InsertBefore(v interface{}, mark *list.Element) *list.Element {
	s.lock.Lock()
	defer s.lock.Unlock()
	return s.data.InsertBefore(v,mark)
}

func (s *SafeList) InsertAfter(v interface{}, mark *list.Element) *list.Element {
	s.lock.Lock()
	defer s.lock.Unlock()
	return s.data.InsertAfter(v,mark)
}

func (s *SafeList) Remove(e *list.Element) interface{} {
	s.lock.Lock()
	defer s.lock.Unlock()
	return s.data.Remove(e)
}