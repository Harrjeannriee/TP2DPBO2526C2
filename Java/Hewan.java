public class Hewan 
{
    private String Nama;
    private int Umur;
    private String JenisKelamin;

    public Hewan(String Nama, int Umur, String JenisKelamin)
    {
        this.Nama = Nama;
        this.Umur = Umur;
        this.JenisKelamin = JenisKelamin;
    }

    // Getter 
    public String getNama()
    {
        return Nama;
    }
    public int getUmur()
    {
        return Umur;
    }
    public String getJenisKelamin()
    {
        return JenisKelamin;
    }

    // Setter
    public void setNama(String Nama){
        this.Nama = Nama;
    }
    public void setUmur(int Umur){
        this.Umur = Umur;
    }
    public void setJenisKelamin(String JenisKelamin){
        this.JenisKelamin = JenisKelamin;
    }
}