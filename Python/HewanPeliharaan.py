from Hewan import Hewan     #from (nama modul/file) import (nama class dari file tersebut)

class HewanPeliharaan(Hewan):   #HewanPeliharaan mewarisi class hewan. (hewanPeliharaan merupakan bagian dari hewan)
    def __init__(self, Nama, Umur, JenisKelamin, idTag, NamaPemilik, StatusVaksin):
        super().__init__(Nama, Umur, JenisKelamin)  #super memberi akses ke parent class untuk memanggil method yang diwariskan

        self.idTag = idTag
        self.NamaPemilik = NamaPemilik
        self.StatusVaksin = StatusVaksin

    # Getter 
    def getIdTag(self):
        return self.idTag
        
    def getNamaPemilik(self):
        return self.NamaPemilik
        
    def getStatusVaksin(self):
        return self.StatusVaksin

    # Setter
    def setIdTag(self, idTag):
        self.idTag = idTag

    def setNamaPemilik(self, NamaPemilik):
        self.NamaPemilik = NamaPemilik

    def setStatusVaksin(self, StatusVaksin):
        self.StatusVaksin = StatusVaksin