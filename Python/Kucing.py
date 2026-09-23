from HewanPeliharaan import HewanPeliharaan

class Kucing(HewanPeliharaan):  #kucing merupakan bagian dari HewanPeliharaan
    def __init__(self, Nama, Umur, JenisKelamin, idTag, NamaPemilik, StatusVaksin, Ras, WarnaBulu, BeratBadan):
        super().__init__(Nama, Umur, JenisKelamin, idTag, NamaPemilik, JenisKelamin)

        self.Ras = Ras
        self.WarnaBulu = WarnaBulu
        self.BeratBadan = BeratBadan

    # Getter
    def getRas(self):
        return self.Ras

    def getWarnaBulu(self):
        return self.WarnaBulu

    def getBeratBadan(self):
        return self.BeratBadan

    # Setter
    def setRas(self, Ras):
        self.Ras = Ras

    def setWarnaBulu(self, WarnaBulu):
        self.WarnaBulu = WarnaBulu

    def setBeratBadan(self, BeratBadan):
        self.BeratBadan = BeratBadan
