/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package taxi.modelo;

import java.io.Serializable;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Table;

/**
 *
 * @author diego
 */
@Entity
@Table(name = "Inv_Empleado")
public class Empleado extends Persona implements Serializable{

    @Column(length = 100, nullable = false)
    private String usuario;
    
    @Column(length = 100, nullable = false)
    private String clave;                    
    
    public Empleado() {
    }            

    public Empleado(String usuario, String clave) {
        this.usuario = usuario;
        this.clave = clave;
    }

    public String getUsuario() {
        return usuario;
    }

    public void setUsuario(String usuario) {
        this.usuario = usuario;
    }

    public String getClave() {
        return clave;
    }

    public void setClave(String clave) {
        this.clave = clave;
    }        

    @Override
    public String toString() {
        return getUsuario()+"   ";
    }        
}
