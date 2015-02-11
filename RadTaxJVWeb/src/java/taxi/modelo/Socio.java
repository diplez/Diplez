/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package taxi.modelo;

import java.io.Serializable;
import java.util.List;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.OneToMany;
import javax.persistence.OneToOne;
import javax.persistence.Table;

/**
 *
 * @author diego
 */

@Entity
@Table(name = "Inv_Socio")
public class Socio extends Persona implements Serializable{   
    
    @Column(length = 100,nullable = false)    
    private String cargo;
    
    @OneToOne
    private Unidad unidad;            
    
    @OneToMany(mappedBy = "socio")
    private List<Multa> listaMultas;
    
    public Socio() {
    }    

    public String getCargo() {
        return cargo;
    }

    public void setCargo(String cargo) {
        this.cargo = cargo;
    }

    public Unidad getUnidad() {
        return unidad;
    }

    public void setUnidad(Unidad unidad) {
        this.unidad = unidad;
    }

    public List<Multa> getListaMultas() {
        return listaMultas;
    }

    public void setListaMultas(List<Multa> listaMultas) {
        this.listaMultas = listaMultas;
    }        
}
