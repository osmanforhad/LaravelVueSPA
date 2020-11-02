<template>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div
            class="card-header d-flex justify-content-between align-items-center"
          >
            <h5>Create Category</h5>
            <a href="#" class="btn btn-primary">Category List</a>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-6 offset-3">
                <form @submit.prevent="createCategory">
                  <div class="form-group">
                    <label for="">Category name</label>
                    <input
                      type="text"
                      v-model="categoryName"
                      class="form-control"
                      name="name"
                      placeholder="category name"
                    />
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-success">
                      Create Category
                    </button>
                  </div>
                </form>
              </div>
            </div>
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
      categoryName: "",
    };
  },
  methods: {
    createCategory() {
      axios
        .post("/api/category", { name: this.categoryName })
        .then((response) => {
          console.log(response);
        });
    },
  },
};
</script>

<style>
</style>