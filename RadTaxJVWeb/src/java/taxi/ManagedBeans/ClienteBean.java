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
import javax.faces.application.FacesMessage;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.SessionScoped;
import javax.faces.context.FacesContext;
import taxi.dao.Dao;
import taxi.modelo.Cliente;
import taxi.modelo.Empleado;
import taxi.modelo.Unidad;

/**
 *
 * @author diego
 */
@ManagedBean(name = "clienteController")
@SessionScoped
public class ClienteBean implements Serializable {

    /**
     * Creates a new instance of EmpleadoBean
     */
    private Cliente cliente;
    private List<Cliente> listaEmpleados = new ArrayList<Cliente>();
    private Unidad unidad;

    public ClienteBean() {
    }

    public String nuevoEmpleado() {
        cliente = new Cliente();
        return "cliente/agregar.xhtml";
    }

    public String eliminarEmpleado(Long id) {
        Dao dao = new Dao();
        if (new Dao().eliminar(dao.obtenerPorId(Cliente.class, id))) {
            FacesMessage fm = new FacesMessage("Usuario Eliminado");
            FacesContext.getCurrentInstance().addMessage(null, fm);
            return "index?faces-redirect=true";
        } else {
            FacesMessage fm = new FacesMessage("Usuario No Eliminado");
            FacesContext.getCurrentInstance().addMessage(null, fm);
            return "index?faces-redirect=true";
        }
    }

    public String guardarEmpleado() {
        new Dao().guardar(cliente);
        return "index?faces-redirect=true";
    }
    
    public String recargar(){
        listaEmpleados = new Dao().listar(Cliente.class);        
        return "index?faces-redirect=true";
    }

    public List<Cliente> getListaEmpleados() {                
        listaEmpleados = new Dao().listar(Cliente.class);        
        for (int i = 0; i < listaEmpleados.size(); i++) {            
            new Dao().actualizar(listaEmpleados.get(i));
        }
        Collections.reverse(listaEmpleados);
        return listaEmpleados;
    }

    public void setListaEmpleados(List<Cliente> listaEmpleados) {
        this.listaEmpleados = listaEmpleados;
    }

    public Cliente getEmpleado() {
        return cliente;
    }

    public void setEmpleado(Cliente empleado) {
        this.cliente = empleado;
    }

}
