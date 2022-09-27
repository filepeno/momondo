export default class UploadImage {
  constructor(element) {
    this.el = element;
    this.fileInput = this.el.querySelector("#image-input");
    this.uploadBtn = this.el.querySelector("[type=submit]");
    this.img = this.el.querySelector("img");

    this.init();
  }

  init() {
    console.log(this.img);
    this.fileInput.addEventListener("input", (e) => {
      if (this.fileInput.value !== "") {
        this.uploadImage(e);
      }
    });
  }

  async uploadImage(e) {
    e.preventDefault();
    const form = e.target.form;
    console.log(this.el);
    const conn = await fetch("/api/api-upload-image.php", {
      method: "POST",
      body: new FormData(form),
    });
    const data = await conn.json();
    if (!conn.ok) {
      console.log(data);
      return;
    }
    // Success
    this.img.src = data.file_path;
  }
}
