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
import javax.persistence.JoinColumn;
import javax.persistence.ManyToMany;
import javax.persistence.OneToOne;
import javax.persistence.Table;

/**
 *
 * @author diego
 */
@Entity
@Table(name = "Inv_Cliente")
public class Cliente extends Persona implements Serializable{
    
    @OneToOne(mappedBy = "cliente")    
    @JoinColumn(name = "idLlamada")
    private Llamada llamada;
    
    @ManyToMany(mappedBy = "cliente")
    private List<Unidad> unidads;
    
    @Column(nullable = false)
    private int asignacion = 0;
    
    @Column(nullable = false)
    private String clave;
    
    @Column(nullable = false)
    private String correo;
    
    @Column(nullable = false)
    private String latitud;
    
    @Column(nullable = false)
    private String longitud;
    
    public Cliente() {
    }            

    public Llamada getLlamada() {
        return llamada;
    }

    public void setLlamada(Llamada llamada) {
        this.llamada = llamada;
    }        

    public List<Unidad> getUnidads() {
        return unidads;
    }

    public void setUnidads(List<Unidad> unidads) {
        this.unidads = unidads;
    }    

    public int getAsignacion() {
        return asignacion;
    }

    public void setAsignacion(int asignacion) {
        this.asignacion = asignacion;
    }        

    public String getClave() {
        return clave;
    }

    public void setClave(String clave) {
        this.clave = clave;
    }

    public String getCorreo() {
        return correo;
    }

    public void setCorreo(String correo) {
        this.correo = correo;
    }    

    public String getLatitud() {
        return latitud;
    }

    public void setLatitud(String latitud) {
        this.latitud = latitud;
    }

    public String getLongitud() {
        return longitud;
    }

    public void setLongitud(String longitud) {
        this.longitud = longitud;
    }
    
    
}
