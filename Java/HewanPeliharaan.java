public class HewanPeliharaan extends Hewan
{
    private String idTag;
    private String NamaPemilik;
    private String StatusVaksin;

    public HewanPeliharaan(String Nama, int Umur, String JenisKelamin, String idTag, String NamaPemilik, String StatusVaksin)
    {
        // call parent class
        super(Nama, Umur, JenisKelamin);
        this.idTag = idTag;
        this.NamaPemilik = NamaPemilik;
        this.StatusVaksin = StatusVaksin;
    }

    // Getter
    public String getIdTag(){
        return idTag;
    }
    public String getNamaPemilik(){
        return NamaPemilik;
    }
    public String getStatusVaksin(){
        return StatusVaksin;
    }

    // Setter
    public void setIdTag(String idTag){
        this.idTag = idTag;
    }
    public void setNamaPemilik(String NamaPemilik){
        this.NamaPemilik = NamaPemilik;
    }
    public void setStatusVaksin(String StatusVaksin){
        this.StatusVaksin = StatusVaksin;
    }
}