class Mahasiswa:
    def __init__(self): 
        self.Nama = ""
        self.Nim = ""
        self.Jurusan = ""
        self.Status = ""
        self.Hobi = ""

    def getNama(self):         
        return self.Nama
    def setNama(self,Nama):      
        self.Nama=Nama

    def getNim(self):
        return self.Nim
    def setNim(self,Nim):
        self.Nim=Nim

    def getJurusan(self):
        return self.Jurusan
    def setJurusan(self,Jurusan):
        self.Jurusan=Jurusan

    def getStatus(self):
        return self.Status
    def setStatus(self,Status):
        self.Status=Status

    def getHobi(self):
        return self.Hobi
    def setHobi(self,Hobi):
        self.Hobi=Hobi

def main():
    print("Masukkan Data Mahasiswa 1")
    Nama1 = input("Nama \t\t:")
    Nim1 = input("NIM \t\t:")
    Jurusan1 = input("Jurusan\t\t:")
    Status1 = input("Status\t\t:")
    Hobi1 = input("Hobi\t\t:")

    mhs1 = Mahasiswa()
    mhs1.setNama(Nama1)
    mhs1.setNim(Nim1)
    mhs1.setJurusan(Jurusan1)
    mhs1.setStatus(Status1)
    mhs1.setHobi(Hobi1)

    VNama1 = mhs1.getNama()
    VNim1 = mhs1.getNim()
    VJurusan1 = mhs1.getJurusan()
    VStatus1 = mhs1.getStatus()
    VHobi1 = mhs1.getHobi()

    print("Masukkan Data Mahasiswa 2")
    Nama2 = input("Nama \t\t:")
    Nim2 = input("NIM \t\t:")
    Jurusan2 = input("Jurusan\t\t:")
    Status2 = input("Status\t\t:")
    Hobi2 = input("Hobi\t\t:")


    mhs2 = Mahasiswa()
    mhs2.setNama(Nama2)
    mhs2.setNim(Nim2)
    mhs2.setJurusan(Jurusan2)
    mhs2.setStatus(Status2)
    mhs2.setHobi(Hobi2)

    VNama2 = mhs2.getNama()
    VNim2 = mhs2.getNim()
    VJurusan2 = mhs2.getJurusan()
    VStatus2 = mhs2.getStatus()
    VHobi2 = mhs2.getHobi()
    

    print("\n==========Mahasiswa 1==========")
    print("Nama         :", VNama1)
    print("NIM          :", VNim1)
    print("Jurusan      :", VJurusan1)
    print("Status       :", VStatus1)
    print("Hobi         :", VHobi1)
    print('=' * 31)
    print("\n==========Mahasiswa 2==========")
    print("Nama         :", VNama2)
    print("NIM          :", VNim2)
    print("Jurusan      :", VJurusan2)
    print("Status       :", VStatus2)
    print("Hobi         :", VHobi2)
    print('=' * 31)

main()
