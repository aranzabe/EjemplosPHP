package consumirrest;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author faranzabe
 */
class Datos {
    int num;
    String texto;

    public Datos() {
    }

    public Datos(int num, String texto) {
        this.num = num;
        this.texto = texto;
    }

    public int getNum() {
        return num;
    }

    public void setNum(int num) {
        this.num = num;
    }

    public String getTexto() {
        return texto;
    }

    public void setTexto(String texto) {
        this.texto = texto;
    }
    
    public Datos getObj(){
        return this;
    }

    @Override
    public String toString() {
        return "Datos{" + "num=" + num + ", texto=" + texto + '}';
    }
    
    
}
