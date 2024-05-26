<style>
    body {
      background-color: rgba(250, 250, 250, 1);
      display: flex;
      flex-direction: column;
      padding-bottom: 67px;
        margin: 0;
        padding: 0;
        width: 100%;
        overflow-x: hidden;
    }
  
    .header-container {
      background-color: rgba(255, 255, 255, 1);
      box-shadow: 0px 2px 10px rgba(3, 3, 3, 0.1);
      display: flex;
      width: 100%;
      align-items: center;
      gap: 20px;
      white-space: nowrap;
      justify-content: space-between;
      padding: 15px 32px 15px 80px;
    }
  
    @media (max-width: 991px) {
      .header-container {
        max-width: 100%;
        flex-wrap: wrap;
        white-space: initial;
        padding: 0 20px;
      }
    }
  
    .header-title-container {
      align-self: stretch;
      display: flex;
      gap: 20px;
      color: #3d3d3d;
      margin: auto 0;
      white-space: initial;
    }
  
    .header-title {
      flex-grow: 1;
      flex-basis: auto;
      margin: auto 0;
      font: 400 20px Actor, sans-serif;
    }
  
    .header-actions {
      display: flex;
      flex-direction: column;
      font-size: 16px;
      font-weight: 700;
      text-align: center;
      justify-content: center;
      white-space: initial;
    }
  
    .login-toggle-button {
      font-family: Montserrat, sans-serif;
      border-radius: 5px;
      background-color: #dcdcdc;
      justify-content: center;
      padding: 8px 10px;
      white-space: initial;
    }
  
    .header-logo {
      aspect-ratio: 6.67;
      object-fit: auto;
      object-position: center;
      width: 325px;
      align-self: stretch;
      max-width: 100%;
    }
  
    .search-container {
      align-self: stretch;
      display: flex;
      gap: 10px;
      font-size: 16px;
      color: #262626;
      font-weight: 400;
      margin: auto 0;
      white-space: initial;
    }
  
    .search-icon {
      aspect-ratio: 1;
      object-fit: auto;
      object-position: center;
      width: 30px;
      margin: auto 0;
    }
  
    .search-box {
      display: flex;
      flex-grow: 1;
      flex-basis: auto;
      white-space: initial;
    }
  
    .search-image-wrapper {
      display: flex;
      flex-direction: column;
      font-family: Montserrat, sans-serif;
      position: relative;
      fill: #fff;
      stroke-width: 1px;
      stroke: #dfdfdf;
      filter: drop-shadow(0px 1px 2px rgba(0, 0, 0, 0.08));
      overflow: hidden;
      border: 1px solid rgba(223, 223, 223, 1);
      aspect-ratio: 5.04;
      width: 227px;
      align-items: start;
      justify-content: center;
      padding: 16px 19px;
      white-space: initial;
    }
  
    .search-image {
      position: absolute;
      inset: 0;
      height: 100%;
      width: 100%;
      object-fit: cover;
      object-position: center;
    }
  
    .header-logout {
      align-self: stretch;
      display: flex;
      flex-direction: column;
      font-size: 16px;
      color: #fff;
      font-weight: 400;
      justify-content: center;
      margin: auto 0;
      white-space: initial;
    }
  
    .logout-button {
      font-family: Montserrat, sans-serif;
      border-radius: 5px;
      background-color: #dcdcdc;
      align-items: start;
      justify-content: center;
      padding: 8px 10px;
      white-space: initial;
    }
  
    .breadcrumbs {
      box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
      background-color: #fff;
      display: flex;
      width: 100%;
      flex-direction: column;
      font-size: 16px;
      color: var(--Dark2, #000);
      font-weight: 400;
      white-space: nowrap;
      text-align: center;
      justify-content: center;
      padding: 20px 60px;
    }
  
    .link-list {
      justify-content: center;
      align-items: center;
      display: flex;
      padding: 0 60px;
      white-space: initial;
    }
  
    .nav-links {
      display: flex;
      width: 556px;
      max-width: 100%;
      gap: 20px;
      justify-content: space-between;
      flex-wrap: wrap;
      white-space: initial;
    }
  
    .main-navLink {
      font-family: Open Sans, sans-serif;
    }
  
    .current-navLink {
      color: var(--cur-page, #e56861);
      font-family: Open Sans, sans-serif;
    }
  
    .content-container {
      display: flex;
      margin-top: 55px;
      width: 100%;
      flex-direction: column;
      padding: 0 42px;
      white-space: initial;
    }
  
    .items-title {
      color: #030303;
      font: 700 24px Montserrat, sans-serif;
    }
  
    .items-record-container {
      display: flex;
      margin-top: 40px;
      align-items: flex-start;
      gap: 20px;
    }
  
    .record-img {
      aspect-ratio: 4.76;
      object-fit: auto;
      object-position: center;
      width: fit-content;
      align-self: start;
      flex-grow: 1;
      flex-basis: 0;
      max-width: 100%;
    }
  
    .icon {
      aspect-ratio: 0.05;
      object-fit: auto;
      object-position: center;
      width: 14px;
      align-self: end;
      margin-top: 34px;
      display: none;
    }
  
    .form-title {
      color: #030303;
      margin-top: 56px;
      font: 700 24px Montserrat, sans-serif;
    }
  
    .form-container {
      display: flex;
      margin-top: 38px;
      align-items: start;
      gap: 20px;
      font-size: 16px;
      color: #030303;
      font-weight: 400;
      white-space: initial;
    }
  
    .form-label-wrapper {
      display: flex;
      flex-direction: column;
      flex-grow: 1;
      flex-basis: 0;
      width: fit-content;
      max-width: 100%;
    }
  
    .form-label-container {
      display: flex;
      width: 883px;
      max-width: 100%;
      gap: 20px;
      font-weight: 700;
      white-space: initial;
      justify-content: space-between;
      padding: 3px 18px;
    }
  
    .form-date-wrapper {
      align-self: start;
      display: flex;
      gap: 20px;
      justify-content: space-between;
    }
  
    .form-item {
      font-family: Montserrat, sans-serif;
    }
  
    .form-input-wrapper,
    .form-input-container,
    .form-label-wrapper {
      border-radius: 5px;
      box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
      border: 1px solid rgba(240, 240, 240, 1);
      background-color: #fff;
      display: flex;
      margin-top: 6px;
      width: 100%;
      gap: 20px;
      justify-content: space-between;
      padding: 13px 80px 13px 17px;
      white-space: initial;
      padding-right: 20px;
    }
  
    .form-items,
    .form-date,
    .form-time,
    .form-user {
      font-family: Montserrat, sans-serif;
      align-self: stretch;
      margin: auto 0;
    }
  
    .form-additional-icon {
      aspect-ratio: 0.06;
      object-fit: auto;
      object-position: center;
      width: 14px;
      display: none;
    }
  </style>
  <header class="header-container">
    <div class="header-title-container">
      <div class="header-title">博幼租借平台</div>
      <div class="header-actions">
        <button class="login-toggle-button">切換至前台</button>
      </div>
    </div>
    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/196541b54fb408ac68c8bd9b8e2144bc9a4356678a3bae52b9db45153a08c3c6?apiKey=8b145548e6db439ca29427c9c8ba0fc3&" alt="Platform Logo" class="header-logo" />
    <div class="search-container">
      <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/00a6a2031c6cef0c111d5953334df4a201f072ba1af6501c6473a157db5e99d4?apiKey=8b145548e6db439ca29427c9c8ba0fc3&" alt="Search Icon" class="search-icon" />
      <div class="search-box">
        <div class="search-image-wrapper">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/105278ef37957b51aa94f0e10bfc631f4e8a9d3e68b345fc853ef8691ce9b7fc?apiKey=8b145548e6db439ca29427c9c8ba0fc3&" alt="Search Item" class="search-image" />
          搜尋物品
        </div>
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/d677e22f4ecc4f5f577b87da61aa5a59cdcd589fd6c882aa9af1a933e9617153?apiKey=8b145548e6db439ca29427c9c8ba0fc3&" alt="Additional Search Icon" class="icon" />
      </div>
    </div>
    <div class="header-logout">
      <button class="logout-button">Logout</button>
    </div>
  </header>
  <nav class="breadcrumbs">
    <div class="link-list">
      <div class="nav-links">
        <a href="#" class="main-navLink">所有清單</a>
        <a href="#" class="current-navLink">借還記錄</a>
        <a href="#" class="main-navLink">進行借還</a>
        <a href="#" class="main-navLink">人員管理</a>
      </div>
    </div>
  </nav>
  <main class="content-container">
    <section class="items-record">
      <h2 class="items-title">物品借還記錄</h2>
      <div class="items-record-container">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/a885a31ab7acb69139719e63be284756ab11ab1f882c0a9b424b6fba0b0c9fde?apiKey=8b145548e6db439ca29427c9c8ba0fc3&" alt="Record Image" class="record-img" />
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/5b523d7159e0f63ab78ac2caa700fae734e89381b9f658d9f4e47a6076819838?apiKey=8b145548e6db439ca29427c9c8ba0fc3&" alt="Additional Record Icon" class="icon" />
      </div>
    </section>
    <section class="form-section">
      <h2 class="form-title">場地租借紀錄</h2>
      <div class="form-container">
        <div class="form-label-wrapper">
          <div class="form-label-container">
            <div class="form-item">場地名稱</div>
            <div class="form-date-wrapper">
              <div class="form-item">租借日期</div>
              <div class="form-item">租借時段</div>
            </div>
          </div>
          <div class="form-input-wrapper">
            <div class="form-items">圓頂教室</div>
            <div class="form-input-container">
              <div class="form-date">2024-11-15</div>
              <div class="form-time">9:00 - 12:00</div>
              <div class="form-user">賴姿妘</div>
            </div>
          </div>
          <div class="form-input-wrapper">
            <div class="form-items">兒童樂園</div>
            <div class="form-input-container">
              <div class="form-date">2024-11-13</div>
              <div class="form-time">13:00 - 18:00</div>
              <div class="form-user">張舜涵</div>
            </div>
          </div>
          <div class="form-input-wrapper">
            <div class="form-items">會議室A</div>
            <div class="form-input-container">
              <div class="form-date">2024-11-05</div>
              <div class="form-time">11:00 - 17:00</div>
              <div class="form-user">賴姿妘</div>
            </div>
          </div>
        </div>
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/122d94394a48c49d381855fa174c50e9c6062b8f68677bc33d88a866457941f5?apiKey=8b145548e6db439ca29427c9c8ba0fc3&" alt="Additional Form Icon" class="form-additional-icon" />
      </div>
    </section>
  </main>