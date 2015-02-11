/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package taxi.modelo;

import java.io.Serializable;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.OneToOne;
import javax.persistence.Table;

/**
 *
 * @author diego
 */

@Entity
@Table(name = "Inv_Ruta")
public class Ruta implements Serializable{
        
    @Id
    @GeneratedValue(strategy = GenerationType.AUTO)
    private Long id;
    
    @Column(length = 200,nullable = false)    
    private String latitud;
    
    @Column(length = 200,nullable = false)    
    private String longitud;
    
    @Column(length = 200,nullable = false)    
    private String descripcion;        
       
    @OneToOne
    private Socio cliente;

    public Ruta() {
    }

    public Ruta(String latitud, String longitud, String descripcion) {        
        this.latitud = latitud;
        this.longitud = longitud;
        this.descripcion = descripcion;        
    }

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
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

    public String getDescripcion() {
        return descripcion;
    }

    public void setDescripcion(String descripcion) {
        this.descripcion = descripcion;
    }

    public Socio getCliente() {
        return cliente;
    }

    public void setCliente(Socio cliente) {
        this.cliente = cliente;
    }                   
}
