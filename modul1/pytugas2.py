import math

print("Kelompok 46")
print("Soffan Marsus Ahmad\t (21120119130042)")
print("Muhammad Firmansyah\t (21120119130102)")
print("Shift : 2")
print("Menghitung pytagoras")
alas = float(input('Alas = '))
tinggi = float(input('Tinggi = '))
if alas <= 0 or tinggi <= 0:
	print("Masukkan harus lebih dari 0")
else :
	sisimiring = math.sqrt(alas**2 + tinggi**2)
	print("Sisi miring =",sisimiring)