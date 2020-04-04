print("Kelompok 46")
print("Soffan Marsus Ahmad (21120119130042)")
print("Muhammad Firmansyah (21120119130102)")
print("(1000 - 2000)")
print("(2000 - 3000)")
print("(3000 - 4000)")
print("(>4000)")
budget = float(input('Masukkan budget anda(ribuan) = '))
base = 1000

if budget <= 2000 and budget >= 1000:
	
	print("(1) Xiaomi")
	print("(2) Realme")
	print("(3) Asus")
	print("(4) Oneplus")
	print("(5) iPhone")
	choose = int(input("Pilih merk : "))
	if choose == 1:
		print("Merk : Xiaomi")
		base+= 200
		print "Harga : ",base
	elif choose == 2:
		print("Merk : Realme")
		base+= 300
		print "Harga : ",base
	elif choose == 3:
		print("Merk : Asus")
		base+= 400
		print "Harga : ",base
	elif choose == 4:
		print("Merk : Oneplus")
		base+= 600
		print "Harga : ",base
	elif choose == 5:
		print("Merk : iPhone")
		base+= 900
		print "Harga : ",base
	else:
		print("Tidak ada dalam pilihan")

	
	if budget >= base:
		pilih = input("Apakah anda akan membeli hp ini? Ya(1) Tidak(2) : ")
		if pilih == 1:
			print("Selamat")
		else :
			print("Silahkan kembali lagi")
	else:
		print("Maaf, Budget anda kurang")

elif budget >= 2001 and budget <= 3000:
	base = base * 2
	print("(1) Xiaomi")
	print("(2) Realme")
	print("(3) Asus")
	print("(4) Oneplus")
	print("(5) iPhone")
	choose = int(input("Pilih merk : "))
	if choose == 1:
		print("Merk : Xiaomi")
		base+= 200
		print "Harga : ",base
	elif choose == 2:
		print("Merk : Realme")
		base+= 300
		print "Harga : ",base
	elif choose == 3:
		print("Merk : Asus")
		base+= 400
		print "Harga : ",base
	elif choose == 4:
		print("Merk : Oneplus")
		base+= 600
		print "Harga : ",base
	elif choose == 5:
		print("Merk : iPhone")
		base+= 900
		print "Harga : ",base
	else:
		print("Tidak ada dalam pilihan")

	
	if budget >= base:
		pilih = input("Apakah anda akan membeli hp ini? Ya(1) Tidak(2) : ")
		if pilih == 1:
			print("Selamat")
		else :
			print("Silahkan kembali lagi")
	else:
		print("Maaf, Budget anda kurang")

elif budget >= 3001 and budget <= 4000:
	base = base * 3
	print("(1) Xiaomi")
	print("(2) Realme")
	print("(3) Asus")
	print("(4) Oneplus")
	print("(5) iPhone")
	choose = int(input("Pilih merk : "))
	if choose == 1:
		print("Merk : Xiaomi")
		base+= 200
		print "Harga : ",base
	elif choose == 2:
		print("Merk : Realme")
		base+= 300
		print "Harga : ",base
	elif choose == 3:
		print("Merk : Asus")
		base+= 400
		print "Harga : ",base
	elif choose == 4:
		print("Merk : Oneplus")
		base+= 600
		print "Harga : ",base
	elif choose == 5:
		print("Merk : iPhone")
		base+= 900
		print "Harga : ",base
	else:
		print("Tidak ada dalam pilihan")

	
	if budget >= base:
		pilih = input("Apakah anda akan membeli hp ini? Ya(1) Tidak(2) : ")
		if pilih == 1:
			print("Selamat")
		else :
			print("Silahkan kembali lagi")
	else:
		print("Maaf, Budget anda kurang")

elif budget >= 4001:
	base = base * 4
	print("(1) Xiaomi")
	print("(2) Realme")
	print("(3) Asus")
	print("(4) Oneplus")
	print("(5) iPhone")
	choose = int(input("Pilih merk : "))
	if choose == 1:
		print("Merk : Xiaomi")
		base+= 200
		print "Harga : ",base
	elif choose == 2:
		print("Merk : Realme")
		base+= 300
		print "Harga : ",base
	elif choose == 3:
		print("Merk : Asus")
		base+= 400
		print "Harga : ",base
	elif choose == 4:
		print("Merk : Oneplus")
		base+= 600
		print "Harga : ",base
	elif choose == 5:
		print("Merk : iPhone")
		base+= 900
		print "Harga : ",base
	else:
		print("Tidak ada dalam pilihan")

	
	if budget >= base:
		pilih = input("Apakah anda akan membeli hp ini? Ya(1) Tidak(2) : ")
		if pilih == 1:
			print("Selamat")
		else :
			print("Silahkan kembali lagi")
	else:
		print("Maaf, Budget anda kurang")
else:
	print("Maaf, Budget anda kurang")
