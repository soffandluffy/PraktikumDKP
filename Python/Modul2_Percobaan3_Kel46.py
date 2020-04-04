angka = float(input('Masukkan angka yang anda inginkan = '))
if angka % 2 == 0:
	print('Angka yang anda masukkan adalah genap yaitu %s' %angka)
elif angka % 2 == 1:
	print('Angka yang anda masukkan adalah ganjil yaitu %s' %angka)
else:
	print('Angka yang anda masukkan bukan bilangan bulat yaitu %s' %angka)
print('Program Selesai')