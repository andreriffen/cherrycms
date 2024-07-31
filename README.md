# Projeto Integrador - Sistema Gerenciador de Blog CherryCMS

CherryCMS é um sistema de gerenciamento de conteúdo (CMS) desenvolvido com Laravel que utiliza Filament numa pilha `TALL Stack` - Tailwind CSS, Alpine JS, Livewire & Laravel

<!-- ![.](.) -->

## 📑 Requisitos

<a href="#requisitos"><img src="https://img.shields.io/badge/PHP%208%2B-777BB4?style=flat-square&logo=php&logoColor=white"/></a> 
<a href="#requisitos"><img src="https://img.shields.io/badge/Composer-885630?style=flat-square&logo=composer&logoColor=white"/></a> 
<a href="#requisitos"><img src="https://img.shields.io/badge/Node%20JS-339933?style=flat-square&logo=node.js&logoColor=white"/></a> 
<a href="#requisitos"><img src="https://img.shields.io/badge/WampServer%20SQL-FC5C5C?style=flat-square&logo=mysql&logoColor=white"/></a> 
<a href="#requisitos"><img src="https://img.shields.io/badge/Laravel%20Herd-FB5038?style=flat-square&logo=laravel&logoColor=white"/></a>

- PHP 8+
- Composer
- Node JS
- Wamp Server SQL
- Herd - Opcional, mas recomendado.

## ⚙️ Instalação

- **Clone o repositório:**

```powershell
git clone https://github.com/andreriffen/cherrycms
cd taskmanager
```

- **Instale as dependências do Composer**

```powershell
composer install
```

- **Instale as dependências do NPM**

```powershell
npm install
```

- **Atualize as dependências do Composer**

```powershell
composer update
```

- **Atualize as dependências do NPM**

```powershell
npm update
```

- **Construa os assets do NPM**

```powershell
npm run build
```

- **Crie o banco de dados**

```powershell
mysql -u root -p -e "CREATE DATABASE cherry;"
```

- **Abra o WampServer e rode as migrations**

```powershell
php artisan migrate:fresh --seed
```



- **Abra o chrome e digite:**

- `cherrycms.test` - Se estiver usando o Laravel Herd

- **Inicie o servidor local**

Inicie o Herd e abra o chrome:

```powershell
Start-Process "chrome.exe" "http://cherrycms.test/admin/login"
```

Ou se não tiver o Herd Instalado:

```powershell
php artisan serve
```

Então acesse no chrome:

```powershell
Start-Process "chrome.exe" "http://localhost:8000/admin/login"
```

ou

```powershell
Start-Process "chrome.exe" "http://127.0.0.1:8000/admin/login"
```

Nas primeiras vezes executando, pode ser que você se depare com lentidão no primeiro uso. Não se preocupe pois conforme você vai usando, melhor o cache e os cookies se adaptam para acelerar o carregamento das páginas.

Alguns erros fatais do tipo 'tempo de execução máximo de 30 segundos excedido' podem ocorrer na primeira vez abrindo. Para resolver isso, basta atualizar a página que o sistema irá lançar exceções automaticamente para corrigir.

O Laravel 'compila' um pedaço do código-fonte, assim como o Node também o faz, então pode ser que o código compilado possa não servir e tenha que buscar na fonte não-compilada.

---

### 🐘 Autor

- 2024 ©️ **Andre Riffen** - [Perfil GitHub](https://github.com/andreriffen)

### 📜 Licença

Este projeto está licenciado sob a Licença MIT.

---

<a href="https://instagram.com/andreriffen"><img src="https://img.shields.io/badge/-andreriffen-maroon?style=flat-square&logo=Instagram&logoColor=white"/></a> 
<a href="https://www.linkedin.com/in/andre-gbf"><img src="https://img.shields.io/badge/-Andre%20GB%20Farias-0077B5?style=flat-square&logo=Linkedin&logoColor=white"/></a> 
<a href="mailto:andreriffen6@gmail.com"><img src="https://img.shields.io/badge/-andreriffen6@gmail.com-D14836?style=flat-square&logo=Gmail&logoColor=white"/></a>
