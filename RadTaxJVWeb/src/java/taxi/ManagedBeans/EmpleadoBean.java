/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package taxi.ManagedBeans;

import java.io.Serializable;
import java.util.List;
import javax.faces.application.FacesMessage;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.SessionScoped;
import javax.faces.context.FacesContext;
import taxi.dao.Dao;
import taxi.modelo.Empleado;

/**
 *
 * @author diego
 */
@ManagedBean(name = "empleadoController")
@SessionScoped
public class EmpleadoBean implements Serializable {

    /**
     * Creates a new instance of EmpleadoBean
     */
    private Empleado empleado;
    private List<Empleado> listaEmpleados;

    public EmpleadoBean() {                 
    }

    public String nuevoEmpleado(){
        empleado = new Empleado();
        return "Empleado/agregar.xhtml";
    }
    
    public String nuevoEmpleado1(){
        empleado = new Empleado();
        return "Empleado/agregar?faces-redirect=true";
    }
    
    public String eliminarEmpleado(Long id){
        Dao dao = new Dao();        
        if(new Dao().eliminar(dao.obtenerPorId(Empleado.class, id))){
            FacesMessage fm = new FacesMessage("Usuario Eliminado");
            FacesContext.getCurrentInstance().addMessage(null, fm);
            return "index?faces-redirect=true";
        }else{
            FacesMessage fm = new FacesMessage("Usuario No Eliminado");
            FacesContext.getCurrentInstance().addMessage(null, fm);
            return "index?faces-redirect=true";
        }
    }
    
    
    public String guardarEmpleado() {
        empleado.setClave(empleado.getCedula());
        empleado.setUsuario(empleado.getNombre());
        new Dao().guardar(empleado);        
        return "index?faces-redirect=true";
    }

    public List<Empleado> getListaEmpleados() {
        listaEmpleados = new Dao().listar(Empleado.class);
        return listaEmpleados;
    }

    public void setListaEmpleados(List<Empleado> listaEmpleados) {
        this.listaEmpleados = listaEmpleados;
    }

    public Empleado getEmpleado() {
        return empleado;
    }

    public void setEmpleado(Empleado empleado) {
        this.empleado = empleado;
    }    
}
