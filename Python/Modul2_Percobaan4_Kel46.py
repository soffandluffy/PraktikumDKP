options = {
	1 : 'Senin',
	2 : 'Selasa',
	3 : 'Rabu',
	4 : 'Kamis',
	5 : 'Jumat',
	6 : 'Sabtu',
	7 : 'Minggu',
	}
x = float(input('Masukkan angka yang diinginkan = '))
print('Hari : %s' % options.setdefault(x, 'Inputan hanya 1 - 7'))
