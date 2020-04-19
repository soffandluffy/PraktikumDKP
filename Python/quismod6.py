class Praktikum:
    def __init__(self): 
        self.nama = ""
        self.nim = ""
        self.hobi = ""
        self.asal = ""

    def getnama(self):         
        return self.nama
    def setnama(self,nama):      
        self.nama=nama

    def getnim(self):
        return self.nim
    def setnim(self,nim):
        self.nim=nim

    def gethobi(self):
        return self.hobi
    def sethobi(self,hobi):
        self.hobi=hobi

    def getasal(self):
        return self.asal
    def setasal(self,asal):
        self.asal=asal

def main():
    print("Masukkan Data:")
    nama = input("Nama \t:")
    nim = input("NIM\t:")
    hobi = input("Hobi\t\t:")
    asal = input("Asal\t\t:")


    prak =Praktikum()
    prak.setnama(nama)
    prak.setnim(nim)
    prak.sethobi(hobi)
    prak.setasal(asal)

    Vnama = prak.getnama()
    Vnim = prak.getnim()
    Vhobi = prak.gethobi()
    Vasal = prak.getasal()
    
    print()
    print('nama saya '+ Vnama+ ' dengan nim ' + Vnim + ' asal saya ' + Vasal + ' dan hobi saya ' + Vhobi)

main()
