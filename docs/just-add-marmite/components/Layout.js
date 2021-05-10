import Link from 'next/link'

export default function Layout({ children }) {
  return (
    <div className="layout">
      <header>
        <Link href="/">
          <a>
            <h1>VLM TATTO</h1>
            <h2>Entregas</h2>
          </a>
        </Link>
      </header>
        <div class="entrega">

          <div class="entrega0">
          <a href="https://github.com/IES-Jaume-Balmes/2020-21-DAW2-M12-VLM-TATTOO/blob/main/Documentation/Entrega0/Entrega%200_%20VLM%20TATTOO.pdf">Entrega 0</a>
          </div>

          <div class="entrega1">
          <a href="https://github.com/IES-Jaume-Balmes/2020-21-DAW2-M12-VLM-TATTOO/blob/main/Documentation/Entrega1/Entrega%201_%20VLM%20TATTOO.pdf">Entrega 1</a>
          </div>

          <div class="entrega2">
          <a href="">Entrega 2</a>
          </div>

          <div class="entrega3">
          <a href="">Entrega 3</a>
          </div>

          <div class="entrega4">
          <a href="">Entrega 4</a>
          </div>


        </div>




      <footer>
        <p>Copyright 2021 VLM TATTOO :)</p>
      </footer>
    </div>
  )
}