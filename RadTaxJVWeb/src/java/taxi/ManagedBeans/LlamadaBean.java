/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package taxi.ManagedBeans;

import java.io.Serializable;
import java.util.ArrayList;
import java.util.List;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.SessionScoped;
import taxi.dao.Dao;
import taxi.modelo.Cliente;
import taxi.modelo.Empleado;
import taxi.modelo.Llamada;
import taxi.modelo.Unidad;

/**
 *
 * @author diego
 */
@ManagedBean
@SessionScoped
public class LlamadaBean implements Serializable{

    /**
     * Creates a new instance of LlamadaBean
     */
    private Llamada llamada;    
    private Dao dao = new Dao();
    private Cliente otro;
    
    public LlamadaBean() {
        llamada = new Llamada();
        otro  = new Cliente();
    }
    
    public String agregarLLamada(Long id){
        otro = dao.obtenerPorId(Cliente.class, id);
        //otro.getUnidads().add(dao.obtenerPorId(Unidad.class, null));
        otro.setAsignacion(1);
        llamada = new Llamada(otro);        
        dao.actualizar(otro);
        dao.guardar(llamada);                        
        return "index?faces-redirect=true";
    }
    
    public String asignarUnidad(Long idUnidad) {        
        otro  = dao.obtenerPorId(Cliente.class, idUnidad);
        List<Unidad>  u= new ArrayList();
        Unidad unidad = dao.obtenerPorId(Unidad.class, idUnidad);
        u.add(unidad);
        otro.setUnidads(u);        
        dao.actualizar(otro);        
        return "index?faces-redirect=true";
    }    
}
