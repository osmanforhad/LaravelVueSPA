<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div
            class="card-header d-flex justify-content-between align-items-center"
          >
            <h5 class="mb-0">Product List</h5>
            <router-link
              :to="{ name: 'create-product' }"
              class="btn btn-primary"
              >Create Product</router-link
            >
          </div>

          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th style="width: 100px">Id</th>
                  <th>Title</th>
                  <th>Slug</th>
                  <th style="width: 170px">Action</th>
                </tr>
              </thead>
              <tbody v-if="products.length">
                <tr v-for="product in products" :key="product.id">
                  <td style="width: 100px">{{ product.id }}</td>
                  <td>{{ product.title }}</td>
                  <td>{{ product.slug }}</td>
                  <td style="width: 170px">
                    <router-link
                      :to="{
                        title: 'edit-product',
                        params: { id: product.id },
                      }"
                      class="btn btn-primary btn-sm"
                      >Edit</router-link
                    >
                    <a
                      @click.prevent="deleteProduct(product)"
                      href="#"
                      class="btn btn-danger btn-sm"
                      >Delete</a
                    >
                  </td>
                </tr>
              </tbody>
              <tbody v-else>
                <tr>
                  <td colspan="4">
                    <h5 class="text-center mt-4 mb-4">No products found.</h5>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      products: [],
    };
  },
  methods: {
    loadProducts() {
      axios.get("/api/product").then((response) => {
        this.products = response.data;
      });
    },
    deleteProduct(product) {
      //   axios.delete(`/api/category/${category.id}`).then(() => {
      //     this.$toast.success({
      //       title: "Success!",
      //       message: "Category deleted successfully.",
      //     });
      //   });
      //   let index = this.categories.indexOf(category);
      //   this.categories.splice(index, 1);
    },
  },
  mounted() {
    //this.loadProducts();
  },
};
</script>
