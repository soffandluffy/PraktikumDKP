public class Mahasiswa { 
        
        private String Nama;
        private long Nim;
        private String Jurusan;
        private String Status;
        private String Hobi;
        //setter
        public void setNama(String Nama) {
            this.Nama = Nama;
        }
        public void setNim(long Nim) {
            this.Nim = Nim;
        }
        public void setJurusan(String Jurusan) {
            this.Jurusan = Jurusan;
        }
        public void setStatus(String Status) {
            this.Status = Status;
        }
        public void setHobi(String Hobi) {
            this.Hobi = Hobi;
        }
        //getter
        public String getNama(){
            return Nama;
        }
        public long getNim(){
            return Nim;
        }
        public String getJurusan(){
            return Jurusan;
        }
        public String getStatus() {
            return Status;
        }
        public String getHobi() {
            return Hobi;
        }
    }