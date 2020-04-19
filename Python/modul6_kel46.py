class Praktikum:
    def __init__(self): 
        self.nama1 = ""
        self.nama2 = ""
        self.kelompok = ""

    def getNama1(self):         
        return self.nama1
    def setNama1(self,nama1):      
        self.nama1=nama1

    def getNama2(self):
        return self.nama2
    def setNama2(self,nama2):
        self.nama2=nama2

    def getKelompok(self):
        return self.kelompok
    def setKelompok(self,kelompok):
        self.kelompok=kelompok

def main():
    print("Masukkan Data:")
    nama1 = input("Nama Praktikan 1\t:")
    nama2 = input("Nama Praktikan 2\t:")
    kelompok = input("Kelompok\t\t:")


    prak =Praktikum()
    prak.setNama1(nama1)
    prak.setNama2(nama2)
    prak.setKelompok(kelompok)

    Vnama1 = prak.getNama1()
    Vnama2 = prak.getNama2()
    Vkelompok = prak.getKelompok()
    

    print("\n==========Menampilkan Data Praktikan==========")
    print("Praktikan 1:", Vnama1)
    print("Praktikan 2:", Vnama2)
    print("Kelompok:", Vkelompok)
    print('=' * 45)


    print()
    print(Vnama1+ ' dan ' + Vnama2 + ' adalah praktikan DKP 2020 Kelompok ' + Vkelompok)

main()
