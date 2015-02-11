/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package taxi.ManagedBeans;

import javax.faces.bean.ManagedBean;
import javax.faces.bean.RequestScoped;
import taxi.dao.Dao;
import taxi.modelo.Empleado;

/**
 *
 * @author diego
 */
@ManagedBean
@RequestScoped
public class prueba {

    /**
     * Creates a new instance of prueba
     */
    private String fecha;
    
    public prueba() {
    }

    public String getFecha() {       
        return new Dao().listar(Empleado.class).toString();
    }

    public void setFecha(String fecha) {
        this.fecha = fecha;
    }            
    
}
