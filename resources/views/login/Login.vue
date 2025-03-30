<template>
    <div>
      <div class="d-flex flex-row g-2 align-items-center justify-content-center vh-100">
        <div class="col container">
          <form @submit.prevent="login">
            <div class="d-flex align-items-center justify-content-center">
              <h1>Bienvenido, por favor inicie sesion</h1>
            </div>

            <div class="d-flex flex-column mb-3">
              <label class="form-label" for="email">Email</label>
              <input
                v-model="objeto.email"
                type="email"
                class="form-control"
                :class="{ 'is-invalid': v$.objeto.email.$error }"
                @input="v$.objeto.email.$touch()"
              />
              <div v-if="v$.objeto.email.$error" class="invalid-feedback">
                Formato de correo incorrecto
              </div>
            </div>

            <div class="d-flex flex-column mb-3">
              <label class="form-label" for="password">Contraseña</label>
              <input
                v-model="objeto.password"
                type="password"
                class="form-control"
                :class="{ 'is-invalid': v$.objeto.password.$error || isWeakPassword }"
                @input="v$.objeto.password.$touch()"
              />
              <!-- <div v-if="v$.objeto.password.$error" class="invalid-feedback">
                Campo incorrecto
              </div> -->
              <div v-if="isWeakPassword" class="invalid-feedback">
                Contraseña débil (mínimo 6 caracteres)
              </div>
            </div>

            <div class="align-items-center justify-content-center d-flex">
              <button type="submit" class="btn btn-primary">
                Iniciar sesion
              </button>
            </div>
          </form>
        </div>
        <div class="col d-flex align-items-center justify-content-center bg-light vh-100">
          <img src="../../assets/img/login.png" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </template>

  <script>
  import useVuelidate from "@vuelidate/core";
import { email, minLength, required } from "@vuelidate/validators";
import axios from "axios";
import Swal from "sweetalert2";


  export default {
    data() {
      return {
        objeto: {
          email: "",
          password: "",

        },
        v$: null, // Se inicializa en created()
      };
    },
    validations() {
      return {
        objeto: {
          email: { required, email },
          password: { required, minLength: minLength(6) },
        },
      };
    },
    created() {
      this.v$ = useVuelidate(this.validations, this);
    },
    computed: {
      isWeakPassword() {
        return this.objeto.password.length > 0 && this.objeto.password.length < 6;
      }
    },
    methods: {
      async login() {
        this.v$.$touch(); // Activa la validación visualmente antes de enviar
        if (!this.v$.$validate() || this.isWeakPassword) {
          Swal.fire({
            icon: "error",
            title: "Campos incorrectos",
            text: "Revisa los errores en el formulario.",
          });
          return;
        }

        try {
            const response = await axios.post("/login", this.objeto);

          localStorage.setItem("user", JSON.stringify(response.data));

          this.v$.$reset();
          this.objeto.email = "";
          this.objeto.password = "";

          this.$router.push('/home')
        } catch (error) {
          console.error(error);
          Swal.fire({
            icon: "error",
            title: "Error en el registro",
            text: "No se pudo completar el registro.",
          });
        }
      },
    },
  };
  </script>
