# Class hewan sebagai parent
class Hewan:   #class
    def __init__(self, Nama, Umur, JenisKelamin):   #method
        # note buat saya = kiri object yang dibuat, kanan nilai yg dibawa parameter __init
        self.Nama = Nama    # attribute = parameter
        self.Umur = Umur
        self.JenisKelamin = JenisKelamin

    # Getter class hewan
    def getNama(self):
        return self.Nama
        
    def getUmur(self):
        return self.Umur
        
    def getJenisKelamin(self):
        return self.JenisKelamin
        
    # Setter class hewan
    def setNama(self, Nama):
        self.Nama = Nama
        
    def setUmur(self, Umur):
        self.Umur = Umur
        
    def setNama(self, JenisKelamin):
        self.JenisKelamin = JenisKelamin
        