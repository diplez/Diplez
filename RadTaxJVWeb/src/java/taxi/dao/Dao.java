/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package taxi.dao;

import java.io.Serializable;
import java.util.ArrayList;
import java.util.List;
import taxi.modelo.Administrador;
import taxi.modelo.Empleado;
import org.hibernate.Criteria;
import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.Transaction;
import taxi.modelo.Cliente;
import taxi.util.HibernateUtil;

/**
 *
 * @author diego
 */
public class Dao implements Serializable {

    public Session getSession() {
        return HibernateUtil.getSesion();
    }

    public Administrador autenticarAdmin(String usuario, String clave) {
        try {
            Query q = getSession().createQuery("from Administrador where usuario=? and clave=?");
            q.setString(0, usuario);
            q.setString(1, clave);
            return (Administrador) q.uniqueResult();
        } catch (Exception e) {
            System.out.println(e);
            return null;
        }
    }

    public Empleado autenticarEmpleado(String usuario, String clave) {
        try {
            Query q = getSession().createQuery("from Empleado where usuario=? and clave=?");
            q.setString(0, usuario);
            q.setString(1, clave);
            return (Empleado) q.uniqueResult();
        } catch (Exception e) {
            System.out.println(e);
            return null;
        }
    }

    public void guardar(Object u) {
        Session session = HibernateUtil.getSessionFactory().openSession();
        try {
            session.beginTransaction();
            session.saveOrUpdate(u);
            session.beginTransaction().commit();
        } catch (Exception e) {
            System.out.println("Error en insertar: " + e.getMessage());
            session.getTransaction().rollback();
        }
    }

    public boolean eliminar(Object obj) {
        boolean b = false;
        Session s = getSession();
        Transaction tx = null;
        try {
            tx = s.beginTransaction();
            s.delete(obj);
            tx.commit();
            b = true;
        } catch (Exception e) {
            tx.rollback();
        } finally {
            s.close();
        }
        return b;
    }

    public boolean actualizar(Object obj) {
        boolean b = false;
        Session s = getSession();
        Transaction tx = null;
        try {
            tx = s.beginTransaction();
            s.merge(obj);
            tx.commit();
            b = true;
        } catch (Exception e) {
            System.out.println("Error en actualizar: " + e.getMessage());
            tx.rollback();
        } finally {
            s.close();
        }
        return b;
    }

    public <T> T obtenerPorId(Class<T> clase, Long id) {
        try {
            Session s = getSession();
            return (T) s.get(clase, id);
        } catch (Exception e) {
            return null;
        }
    }

    public Empleado eliminaEmpleadoCedula(String cedula) {
        try {
            String hql = "FROM Empleado E WHERE E.cedula = :cedula";
            Query query = getSession().createQuery(hql);            
            query.setParameter("cedula", cedula);
            //int result = query.executeUpdate();
            return (Empleado) query.uniqueResult();
        } catch (Exception e) {
            System.out.println(e);
        }        
        return null;
    }

    public <T> List<T> listar(Class<T> clase) {
        try {
            Criteria cri = getSession().createCriteria(clase);
            return (List<T>) cri.list();
        } catch (Exception e) {
            return new ArrayList();
        }
    }    
    
    public static void main(String[] args) {
        Dao dao = new Dao();        
        System.out.println(dao.eliminaEmpleadoCedula("1100778420").getNombre());        
    }   
}
