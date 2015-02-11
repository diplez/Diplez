/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package taxi.ManagedBeans;

import java.io.Serializable;
import java.util.ArrayList;
import java.util.Collections;
import java.util.List;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.SessionScoped;
import taxi.dao.Dao;
import taxi.modelo.Unidad;

/**
 *
 * @author diego
 */
@ManagedBean
@SessionScoped
public class UnidadBean implements Serializable{

    private List<Unidad> listaUnidad = new ArrayList<Unidad>();    

    public UnidadBean() {
    }

    public void setListaUnidad(List<Unidad> listaUnidad) {
        this.listaUnidad = listaUnidad;
    }

    public List<Unidad> getListaUnidad() {
        listaUnidad = new Dao().listar(Unidad.class);
        for (int i = 0; i < listaUnidad.size(); i++) {
            new Dao().actualizar(listaUnidad.get(i));
        }
        Collections.reverse(listaUnidad);
        return listaUnidad;        
    }   
    
    public static void main(String[] args) {
        System.out.println(new UnidadBean().getListaUnidad());;
    }
}
