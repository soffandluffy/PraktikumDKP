from collections import deque
pilihan = 0
data = 0
count = 0
queue = deque()
while count == 0:
    print("---Ini Queue---")
    print("1. Enqueue Item")
    print("2. Dequeue Item")
    print("3. Lihat Daftar Data")
    print("4. Lihat Data Teratas")
    pilihan = int(input("Masukkan Pilihan : "))
    count +=1
    if pilihan == 1:
        data = int(input("Data yang ditambahkan : "))
        queue.append(data)
        print ("")
        count = 0
    if pilihan == 2:
        if not queue :
            print("Data kosong")
            count = 0
            print ("")
        else :
            queue.popleft()
            count = 0
            print ("")
    if pilihan == 3:
        print(queue)
        count = 0
        print ("")
    if pilihan == 4:
        if not queue :
            print("Data kosong")
            count = 0
            print ("")
        else :
            print(queue[0])
            count = 0
            print ("")