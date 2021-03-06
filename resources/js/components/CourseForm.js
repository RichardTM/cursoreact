import React, { Component} from 'react'

export default class CourseForm extends Component {

    state = {
        curso:'',
        descripcion:'',
        imagen:'',
        lengua_id:'',
        desarrollador_id:''
    }

    onChange = (e) => {
        this.setState({
            [e.target.name]: e.target.value
        })
    }

   onSubmit(e) {
        e.preventDefault();


        axios.post('/cursos', state)
            .then(res => {
                console.log({ alert_message: "success" })
            }).catch(error => {
               console.log({ alert_message: "error" });
            })

    }

    render() {
        return (
            <div className="card mt-5 py-5">
                <div className="card-body" >
                    <h2 className="card-title text-center mb-5">
                    NUEVO CURSO
                    </h2>
                    <form  onSubmit={this.onSubmit}>

                        <div className="form-group row">
                            <label htmlFor="" className="col-sm-4 col-lg-3 col-form-label">
                                Nombre del Curso
                            </label>
                            <div className="col-sm-9 col-form-label">
                                <input
                                onChange={this.onChange}
                                name="curso"
                                type="text"
                                className="form-control"
                                placeholder="Nombre del Curso"
                                />
                            </div>
                        </div>

                        <div className="form-group row">
                            <label htmlFor="" className="col-sm-4 col-lg-3 col-form-label">
                                Descripcion
                            </label>
                            <div className="col-sm-9 col-form-label">
                                <input
                                onChange={this.onChange}
                                name="descripcion"
                                type="text"
                                className="form-control"
                                placeholder="Descripcion del Curso"
                                />
                            </div>
                        </div>

                        <div className="form-group row">
                            <label htmlFor="" className="col-sm-4 col-lg-2 col-form-label">
                                Imagen
                            </label>
                            <div className="col-sm-4 col-form-label">
                                <input
                                onChange={this.onChange}
                                name="imagen"
                                type="text"
                                className="form-control"
                                />
                            </div>
                            <label htmlFor="" className="col-sm-4 col-lg-2 col-form-label">
                                Lengua
                            </label>
                            <div className="col-sm-4 col-form-label">
                                <input
                                onChange={this.onChange}
                                name="lengua_id"
                                type="text"
                                className="form-control"
                                />
                            </div>
                        </div>
                        <div className="form-group row">
                            <label htmlFor="" className="col-sm-4 col-lg-3 col-form-label">
                                Desarrollador
                            </label>
                            <div className="col-sm-9 col-form-label">
                                <input
                                onChange={this.onChange}
                                name="desarrollador_id"
                                className="form-control"
                                placeholder="Nombre "
                                />
                            </div>
                        </div>

                        <input type="submit" className="btn btn-success btn-block py-3 mt-2" value="Guardar"/>
                    </form>
                </div>
            </div>
        )
    }
}
