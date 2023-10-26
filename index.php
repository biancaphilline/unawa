<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>unawa</title>
    <style>
      @import url("https://fonts.googleapis.com/css?family=Poppins:400, 700");

      @font-face {
        font-family: "VAGRoundedStd-Bold";
        font-style: normal;
        font-weight: 700;
        src: url("assets/fonts/VAGRoundedStd-Bold.otf") format("opentype");
      }

      @font-face {
        font-family: "ArialRoundedMTBoldRegular";
        font-style: normal;
        font-weight: 400;
        src: url("assets/fonts/ArialRoundedMTBoldRegular.ttf") format("truetype");
      }

      .landing-page {
        align-items: center;
        background-color: white;
        flex-direction: column;
        height: 4295px;
        overflow: hidden;
        width: auto;
      }

      .hidden,
      .hidden * {
        pointer-events: none;
        visibility: hidden;
      }

      .landing-page-3 {
        align-items: flex-end;
        background-color: white;
        display: flex;
        height: 50px;
        margin-top: 90px;
        min-width: 1440px;
      }

      .lp-container {
        height: 0;
        position: relative;
        width: 1440px;
      }

      .lp-3-content {
        align-items: center;
        display: flex;
        align-self: center;
        flex-direction: column;
        gap: 10px;
        left: 200px;
        min-height: 365px;
        position: absolute;
        top: 0;
        width: 1044px;
      }

      .discover-the-art-of {
        font-family: "Poppins";
        font-weight: normal;
        color: #333333;
        font-size: 25px;
        line-height: 1.2;
        margin-right: 4px;
        text-align: center;
        width: 1026px;
        margin-top: 0;
      }

      .empower-learning-with-silent-expression {
        color: #ffcc00;
        font-family: "VAGRoundedStd-Bold";
        font-size: 55px;
        font-weight: 700;
        letter-spacing: 1.65px;
        line-height: normal;
        margin-right: 2px;
        margin-bottom: 0;
        min-height: 66px;
        min-width: 1040px;
        white-space: nowrap;
      }

      .landing-page .buton-3 {
        align-items: flex-start;
        border-radius: 36px;
        display: inline-flex;
        gap: 10px;
        overflow: hidden;
        padding: 24px 48px;
        position: relative;
      }

      .learn-now {
        letter-spacing: 0;
        line-height: 18px;
        margin-top: -1px;
        position: relative;
        white-space: nowrap;
        width: fit-content;
      }

      .lp-3-banner {
        height: 470px;
        left: 0;
        object-fit: cover;
        position: absolute;
        top: 207px;
        width: 1440px;
      }

      .navbar {
        position: fixed;
        top: 0;
        width: 100%;
        background-color: white;
        z-index: 100;
      }

      .overlap-group5 {
        height: 133px;
        position: relative;
        width: 1443px;
      }

      .logo {
        cursor: pointer;
        height: 56px;
        left: 35px;
        object-fit: cover;
        position: absolute;
        width: 160px;
        margin-top: 25px;
      }

      .join-now-button {
        cursor: pointer;
        align-items: flex-start;
        background-color: #21409a;
        border-radius: 48px;
        display: flex;
        height: 25px;
        left: 1285px;
        min-width: 114px;
        padding: 10px 15px;
        position: absolute;
        top: 30px;
        justify-content: center;
      }

      .join-now {
        letter-spacing: 0;
        align-self: center;
        line-height: normal;
        min-height: 24px;
        font-family: "Poppins";
        font-weight: bold;
        text-decoration: none;
        color: white;
      }

      .navbar-container {
        background-color: white;
        height: 106px;
        left: 0;
        position: absolute;
        width: 100%;
      }

      .nav-buttons {
        align-items: flex-start;
        display: flex;
        gap: 30px;
        height: 25px;
        left: 474px;
        min-width: 503px;
        position: absolute;
        top: 40px;
        text-decoration: none !important;
      }

      .home {
        cursor: pointer;
        letter-spacing: 0;
        line-height: normal;
        min-height: 24px;
        min-width: 49px;
        font-family: "Poppins";
        font-weight: bold;
        font-size: 16px;
        color: #333333;
        text-decoration: none !important;
      }

      .about {
        cursor: pointer;
        align-self: flex-end;
        letter-spacing: 0;
        line-height: normal;
        min-height: 24px;
        min-width: 51px;
        font-family: "Poppins";
        font-weight: bold;
        font-size: 16px;
        color: #333333;
      }

      .fsl-translator {
        cursor: pointer;
        letter-spacing: 0;
        line-height: normal;
        margin-top: 0.13px;
        min-height: 24px;
        min-width: 116px;
        font-family: "Poppins";
        font-weight: bold;
        font-size: 16px;
        color: #333333;
      }

      .learn-button {
        align-items: center;
        display: inline-flex;
        gap: 8px;
        justify-content: center;
        margin-top: 0.13px;
        position: relative;
        font-family: "Poppins";
        font-weight: bold;
        font-size: 16px;
        color: #333333;
      }

      .akar-iconschevron-down {
        height: 12px;
        position: relative;
        width: 12px;
      }

      .learn {
        cursor: pointer;
        letter-spacing: 0;
        line-height: normal;
        margin-top: -1px;
        position: relative;
        width: fit-content;
        font-family: "Poppins";
        font-weight: bold;
        font-size: 16px;
        color: #333333;
      }

      .contact-us {
        cursor: pointer;
        align-self: center;
        letter-spacing: 0;
        line-height: normal;
        margin-bottom: 1.87px;
        min-height: 21px;
        width: 93px;
        font-family: "Poppins";
        font-weight: bold;
        font-size: 16px;
        color: #333333";
      }

      .landing-page-1 {
        align-items: center;
        display: flex;
        gap: 100px;
        margin-right: 150px;
        margin-top: 150px;
        min-width: 1239px;
        font-family: "VAGRoundedStd-Bold";
      }

      .collage {
        align-items: flex-start;
        display: flex;
        gap: 18px;
        height: 792px;
        min-width: 742px;
      }

      .frame-container {
        align-items: flex-start;
        display: flex;
        flex-direction: column;
        gap: 8px;
        min-height: 792px;
        width: 172px;
      }

      .frame-14195 {
        background-image: url(assets/assets-png/LPSigns/2.png);
        background-position: 50% 50%;
        background-size: cover;
        border-radius: 40px;
        height: 192px;
        width: 172px;
      }

      .frame-14196 {
        background-image: url(assets/assets-png/LPSigns/3.png);
        background-position: 50% 50%;
        background-size: cover;
        border-radius: 40px;
        height: 192px;
        width: 172px;
      }

      .frame-14197 {
        background-image: url(assets/assets-png/LPSigns/4.png);
        background-position: 50% 50%;
        background-size: cover;
        border-radius: 40px;
        height: 192px;
        width: 172px;
      }

      .frame-14198 {
        background-image: url(assets/assets-png/LPSigns/5.png);
        background-position: 50% 50%;
        background-size: cover;
        border-radius: 40px;
        height: 192px;
        width: 172px;
      }

      .frame-14199 {
        background-image: url(assets/assets-png/LPSigns/6.png);
        background-position: 50% 50%;
        background-size: cover;
        border-radius: 40px;
        height: 192px;
        width: 172px;
      }

      .frame-14200 {
        background-image: url(assets/assets-png/LPSigns/7.png);
        background-position: 50% 50%;
        background-size: cover;
        border-radius: 40px;
        height: 192px;
        width: 172px;
      }

      .frame-14201 {
        background-image: url(assets/assets-png/LPSigns/8.png);
        background-position: 50% 50%;
        background-size: cover;
        border-radius: 40px;
        height: 192px;
        width: 172px;
      }

      .frame-14202 {
        background-image: url(assets/assets-png/LPSigns/9.png);
        background-position: 50% 50%;
        background-size: cover;
        border-radius: 40px;
        height: 192px;
        width: 172px;
      }

      .frame-14203 {
        background-image: url(assets/assets-png/LPSigns/10.png);
        background-position: 50% 50%;
        background-size: cover;
        border-radius: 40px;
        height: 192px;
        width: 172px;
      }

      .frame-14204 {
        background-image: url(assets/assets-png/LPSigns/11.png);
        background-position: 50% 50%;
        background-size: cover;
        border-radius: 40px;
        height: 192px;
        width: 172px;
      }

      .frame-14205 {
        background-image: url(assets/assets-png/LPSigns/12.png);
        background-position: 50% 50%;
        background-size: cover;
        border-radius: 40px;
        height: 192px;
        width: 172px;
      }

      .frame-14206 {
        background-image: url(assets/assets-png/LPSigns/13.png);
        background-position: 50% 50%;
        background-size: cover;
        border-radius: 40px;
        height: 192px;
        width: 172px;
      }

      .frame-14207 {
        background-image: url(assets/assets-png/LPSigns/14.png);
        background-position: 50% 50%;
        background-size: cover;
        border-radius: 40px;
        height: 192px;
        width: 172px;
      }

      .frame-14208 {
        background-image: url(assets/assets-png/LPSigns/15.png);
        background-position: 50% 50%;
        background-size: cover;
        border-radius: 40px;
        height: 192px;
        width: 172px;
      }

      .frame-14209 {
        background-image: url(assets/assets-png/LPSigns/16.png);
        background-position: 50% 50%;
        background-size: cover;
        border-radius: 40px;
        height: 192px;
        width: 172px;
      }

      .frame-14210 {
        background-image: url(assets/assets-png/LPSigns/17.png);
        background-position: 50% 50%;
        background-size: cover;
        border-radius: 40px;
        height: 192px;
        width: 172px;
      }

      .group-5 {
        align-items: flex-start;
        display: flex;
        flex-direction: column;
        margin-bottom: 9px;
        margin-left: 80px;
        min-height: 621px;
        width: 451px;
      }

      .header {
        color: transparent;
        margin-top: 10px;
        margin-bottom: 25px;
        font-family: "VAGRoundedStd-Bold";
        font-size: 100px;
        font-weight: 700;
        letter-spacing: 3px;
        line-height: normal;
        height: 220px;
        width: 384px;
      }

      .span2 {
        color: #ffcc00;
      }

      .span0 {
        color: #be1e2d;
      }

      .span1 {
        color: #21409a;
      }

      .get-started-button {
        align-items: flex-start;
        background-color: #21409a;
        border-radius: 36px;
        cursor: pointer;
        display: inline-flex;
        gap: 10px;
        margin-top: 50px;
        overflow: hidden;
        padding: 24px 48px;
        position: relative;
      }

      .get-started {
        letter-spacing: 0;
        line-height: 18px;
        margin-top: -1px;
        font-family: "Poppins";
        font-size: 24px;
        font-weight: bold;
        color: white;
        position: center;
        align-self: center;
        width: fit-content;
        text-decoration: none;
      }

      .are-you-ready-to-bri {
        color: #333333;
        font-family: "Poppins";
        font-size: 24px;
        font-weight: 400;
        letter-spacing: 0;
        line-height: normal;
        min-height: 216px;
        position: relative;
        width: 449px;
      }

      .span1-1 {
        color: var(--fuscous-gray);
        font-weight: 700;
      }

      .footer {
        align-items: flex-start;
        background-color: transparent;
        display: flex;
        flex-direction: row;
        flex-shrink: 1;
        height: 432px;
        justify-content: flex-start;
        margin-left: 2px;
        min-width: 1442px;
        width: auto;
      }

      .overlap-group-3 {
        align-items: flex-start;
        background-color: #21409a0f;
        display: flex;
        flex-direction: column;
        min-height: 432px;
        padding: 21px 101px;
        width: 1440px;
      }

      .landing-page-2 {
        align-items: center;
        display: flex;
        flex-direction: column;
        margin-top: 109px;
        padding-left: 0px;
      }

      .flex-row {
        align-items: flex-start;
        display: flex;
        gap: 90px;
        margin-left: 4px;
        margin-top: 85px;
        min-width: 1243px;
      }

      .group-20 {
        align-items: flex-start;
        align-self: flex-end;
        display: flex;
        flex-direction: column;
        gap: 10px;
        min-height: 329px;
        width: 608px;
      }

      .shape-the-language-expand-the-horizon {
        color: #21409a;
        font-family: "VAGRoundedStd-Bold";
        font-size: 55px;
        font-weight: 700;
        letter-spacing: 1.65px;
        line-height: normal;
        margin-left: 1.91px;
        height: 80px;
        width: 602px;
      }

      .overlap-group3 {
        height: 200px;
        position: relative;
        width: 604px;
      }

      .submit-sign-now {
        align-items: center;
        display: flex;
        gap: 9px;
        height: 32px;
        left: 259px;
        min-width: 205px;
        position: absolute;
        top: 155px;
        text-decoration: none;
      }

      .submit-now {
        cursor: pointer;
        color: #21409a;
        font-family: "ArialRoundedMTBoldRegular";
        font-size: 28px;
        font-weight: 400;
        letter-spacing: 0;
        line-height: normal;
        min-height: 32px;
        min-width: 164px;
        white-space: nowrap;
      }

      .vector {
        height: 12px;
        margin-top: 0.92px;
        width: 31px;
      }

      .contribute-to-unawa {
        font-family: "Poppins";
        font-weight: normal;
        color: #333333;
        font-size: 25px;
        line-height: 43px;
        position: absolute;
        width: 604px;
      }

      .lp-illustration-1 {
        height: 385px;
        object-fit: cover;
        width: 545px;
      }

      .group-17 {
        align-items: center;
        display: flex;
        flex-direction: column;
        gap: 7px;
        margin-left: 35px;
        min-height: 110px;
        width: 774px;
      }

      .where-hands-and-voic {
        font-family: "Poppins";
        font-size: 24px;
        color: #333333;
        letter-spacing: 0;
        line-height: normal;
        margin-right: 5.97px;
        margin-top: 1px;
        position: relative;
        text-align: center;
        width: 660px;
      }

      .bridge-voices-connect-worlds {
        font-family: "VAGRoundedStd-Bold";
        font-size: 55px;
        color: #be1e2d;
        letter-spacing: 1.65px;
        line-height: normal;
        margin-right: 2px;
        min-height: 66px;
        min-width: 772px;
        white-space: nowrap;
      }

      .group-container {
        height: 270px;
        margin-top: 45px;
        position: relative;
        width: 1340px;
      }

      .group-18 {
        align-items: center;
        cursor: pointer;
        display: flex;
        height: 43px;
        left: 245px;
        min-width: 111px;
        position: absolute;
        top: 38px;
      }

      .translation-try-now {
        align-items: center;
        background-color: #21409a;
        border-radius: 48px;
        display: flex;
        height: 43px;
        justify-content: center;
        min-width: 109px;
        padding: 5px 16px;
        margin-top: 12px;
      }

      .try-now-2 {
        font-family: "Poppins";
        font-weight: bold;
        color: white;
        min-height: 23px;
        width: 77px;
      }

      .landing-page .try-now-3 {
        letter-spacing: 0;
        line-height: normal;
      }

      .group-16 {
        align-items: flex-start;
        display: flex;
        gap: 50px;
        height: 270px;
        left: 0;
        min-width: 1238px;
        position: absolute;
        top: 0;
      }

      .group-14 {
        align-items: flex-start;
        background-color: white;
        border: 1px solid;
        border-color: #3333334b;
        border-radius: 20px;
        display: flex;
        height: 270px;
        min-width: 380px;
        padding: 22.1px 18.5px;
      }

      .group-container-2 {
        height: 225px;
        position: relative;
        width: 342px;
      }

      .elearn-try-now {
        cursor: pointer;
        align-items: center;
        background-color: #be1e2d;
        border-radius: 48px;
        display: flex;
        height: 43px;
        justify-content: center;
        align-self: center;
        left: 226px;
        min-width: 109px;
        padding: 5px 16px;
        position: absolute;
        top: 20px;
      }

      .try-now-1 {
        font-family: "Poppins";
        font-weight: bold;
        color: white;
        min-height: 23px;
        width: 77px;
      }

      .group-22 {
        align-items: flex-start;
        display: flex;
        flex-direction: column;
        gap: 26px;
        margin-left: 12px;
        min-height: 225px;
        position: absolute;
        top: 0;
        width: 342px;
      }

      .group-13 {
        font-family: "Poppins";
        font-weight: normal;
        font-size: 15px;
        color: #333333;
        align-items: flex-start;
        align-self: center;
        display: flex;
        flex-direction: column;
        gap: 13px;
        min-height: 124px;
        width: 346px;
      }

      .learn-and-connect {
        font-family: "ArialRoundedMTBoldRegular";
        font-size: 20px;
        font-weight: normal;
        color: #333333;
        letter-spacing: 0;
        line-height: normal;
        min-height: 22px;
        white-space: nowrap;
      }

      .seamless-education {
        letter-spacing: 0;
        line-height: normal;
        margin-left: 0;
        min-height: 88px;
        width: 342px;
      }

      .group-12 {
        align-items: center;
        background-color: #be1e2d2b;
        border-radius: 15px;
        display: flex;
        height: 76px;
        min-width: 76px;
        padding: 14.3px 14.3px;
        justify-content: center;
        padding: 8.6px 8.6px;
      }

      .elearn {
        height: 60px;
        object-fit: cover;
        width: 60px;
      }

      .group-15 {
        align-items: flex-start;
        background-color: white;
        border: 1px solid;
        border-color: #3333334b;
        border-radius: 20px;
        display: flex;
        flex-direction: column;
        gap: 26px;
        min-height: 270px;
        padding: 21px 15px;
        width: 380px;
      }

      .group-6 {
        align-items: center;
        background-color: #21409a17;
        border-radius: 15px;
        display: flex;
        height: 76px;
        justify-content: center;
        margin-left: 10px;
        min-width: 76px;
        padding: 8.6px 8.6px;
      }

      .translator {
        height: 58px;
        object-fit: cover;
        width: 58px;
      }

      .group-7 {
        font-family: "Poppins";
        font-weight: normal;
        font-size: 15px;
        color: #333333;
        align-items: flex-start;
        align-self: center;
        display: flex;
        flex-direction: column;
        gap: 13px;
        min-height: 123px;
        width: 346px;
      }

      .translating-silence-into-expression {
        font-family: "ArialRoundedMTBoldRegular";
        font-size: 20px;
        font-weight: normal;
        color: #333333;
        letter-spacing: 0;
        line-height: normal;
        min-height: 22px;
        white-space: nowrap;
      }

      .unlock-the-power-of {
        letter-spacing: 0;
        line-height: normal;
        min-height: 88px;
        width: 342px;
      }

      .group-11 {
        font-family: "Poppins";
        font-weight: normal;
        font-size: 15px;
        color: #333333;
        align-items: flex-start;
        background-color: white;
        border: 1px solid;
        border-color: #3333334b;
        border-radius: 20px;
        display: flex;
        flex-direction: column;
        gap: 25px;
        min-height: 270px;
        padding: 21.1px 15.7px;
        width: 380px;
      }

      .group-7-1 {
        font-family: "Poppins";
        font-weight: normal;
        font-size: 15px;
        color: #333333;
        align-items: flex-start;
        align-self: center;
        display: flex;
        flex-direction: column;
        gap: 13px;
        min-height: 124px;
        width: 346px;
      }

      .hand-signs-in-harmony {
        font-family: "ArialRoundedMTBoldRegular";
        font-size: 20px;
        font-weight: normal;
        color: #333333;
        letter-spacing: 0;
        line-height: normal;
        min-height: 22px;
        white-space: nowrap;
      }

      .stay-connected-with {
        letter-spacing: 0;
        line-height: normal;
        min-height: 88px;
        width: 342px;
      }

      .group-container-1 {
        align-items: flex-start;
        align-self: center;
        display: flex;
        gap: 130px;
        margin-right: 1.49px;
        min-width: 342px;
      }

      .add-sign-try-now {
        cursor: pointer;
        align-items: center;
        background-color: #ffcc00;
        border-radius: 48px;
        display: flex;
        height: 43px;
        justify-content: center;
        align-self: center;
        min-width: 109px;
        padding: 5px 16px;
        margin-right: 12px;
      }

      .try-now {
        font-family: "Poppins";
        font-weight: bold;
        color: white;
        height: auto;
        width: auto;
      }

      .group-10 {
        align-items: center;
        background-color: #ffcc0047;
        border-radius: 15px;
        display: flex;
        height: 76px;
        justify-content: center;
        min-width: 76px;
        padding: 8.6px 8.6px;
        margin-left: 20px;
      }

      .updated {
        height: 48px;
        object-fit: cover;
        width: 48px;
      }

      .landing-page-3 {
        align-items: center;
        display: flex;
        flex-direction: column;
        margin-top: 109px;
        padding-left: 0px;
        margin-bottom: 700px;
      }

      .lp-container {
        height: 677px;
        position: relative;
        width: 100%;
      }

      .lp-3-content {
        align-items: center;
        display: flex;
        flex-direction: column;
        gap: 52px;
        left: 225px;
        height: 5px;
        position: absolute;
        width: 1044px;
      }

      .discover-the-art-of {
        letter-spacing: 0;
        line-height: 43px;
        margin-left: 10px;
        min-height: 129px;
        text-align: center;
        width: 1026px;
      }

      .empower-learning-with-silent-expression {
        color: #ffcc00;
        font-family: "VAGRoundedStd-Bold";
        font-size: 55px;
        font-weight: 700;
        letter-spacing: 1.65px;
        line-height: normal;
        margin-top: 10px;
        height: 10px;
        min-width: 1040px;
        white-space: nowrap;
      }

      .learn-now-button {
        background-color: #ffcc00;
        align-items: center;
        border-radius: 36px;
        cursor: pointer;
        display: inline-flex;
        gap: 10px;
        overflow: hidden;
        padding: 32px 48px;
        position: relative;
      }

      .learn-now {
        font-family: "Poppins";
        color: white;
        font-weight: bold;
        font-size: 21px;
        letter-spacing: 0;
        line-height: 18px;
        margin-top: -1px;
        position: relative;
        white-space: nowrap;
        width: fit-content;
      }

      .lp-3-banner {
        height: 470px;
        left: 0;
        object-fit: cover;
        position: absolute;
        top: 207px;
        width: 100%;
      }

      .landing-page-4 {
        align-items: flex-start;
        background-color: white;
        display: flex;
        gap :77px;
        height: 1054px;
        min-width: 1440px;
        padding: 20px 101px;
        margin-left: 1%;
      }

      .lp-4-illustration-2-1 {
        height: 776px;
        object-fit: cover;
        width: 556px;
      }

      .group-25 {
        align-items: flex-start;
        display: flex;
        flex-direction: column; margin-top: 11px;
        min-height: 798px; width: 604px;
        }

      .our-story {
        font-family: "VAGRoundedStd-Bold";
        font-weight: bold;
        font-size: 55px;
        color: #be1e2d;
        letter-spacing: 1.65px;
          line-height: normal;
          min-height: 66px;
          white-space: nowrap;
        }

      .read-more-button {
        background-color: #be1e2d;
        align-items: center;
        border-radius: 36px;
        cursor: pointer;
        display: inline-flex;
        gap: 10px;
        overflow: hidden;
        padding: 24px 48px;
        position: relative;
      }

      .read-more {
        font-family: "Poppins";
        font-weight: bold;
        font-size: 24px;
        color: white;
        letter-spacing: 0;
          line-height: 18px;
          margin-top: -1px;
          position: relative;
          white-space: nowrap;
          width: fit-content;
      }

      .at-unawa-our-journe {
        font-family: "Poppins";
        font-weight: normal;
        font-size: 25px;
        color: #333333;
          letter-spacing: 0;
          line-height: 43px;
          margin-top: 23px;
          min-height: 602px;
          width: 604px;
      }

      .footer {
        font-family: "Poppins";
        align-items: flex-start;
        background-color:transparent;
        display: flex;
        flex-direction: row;
        flex-shrink: 1;
        height: 432px;
        justify-content: flex-start;
        margin-left: 2px;
        min-width: 1442px;
        width: auto;
        }

        .overlap-group-3 {
        align-items: flex-start;
        background-color: #21409a0f;
        display: flex;
        flex-direction: column;
        min-height: 432px;
        padding: 21px 101px;
        width: 1440px;
        }

        .group-34 {
        align-items: center;
        display: flex;
        gap: 231px; height: 277px;
        margin-top: 18px;
        min-width: 1237px;
      }

      .group-29 {
        align-items: flex-end;
        display: flex;
        flex-direction: column;
        gap: 14px;
        min-height: 277px;
        width: 317px;
      }

      .logo-3 {
        height: 135px;
        margin-right: 2px;
        object-fit: cover;
        width: 315px;
      }

      .unawa-translates-spo {
        color: #333333;
        font-family: "Poppins";
        font-size: 21px;
        font-weight: 400;
        letter-spacing: 0;
        line-height: normal;
        margin-right: 2px;
        min-height: 128px;
        width: 301px;
      }

      .group-33 {
        align-items: flex-start;
        display: flex;
        height: 170px;
        margin-bottom: 7px;
        min-width: 689px;
      }

      .group-32 {
        align-items: flex-start;
        display: flex;
        flex-direction: column;
        gap: 28px;
        margin-left: 107px;
        min-height: 170px;
        width: 224px;
      }

      .other {
        font-family: "Poppins";
        font-weight: bold;
        font-size: 21px;
        letter-spacing: 0;
        line-height: normal;
        min-height: 32px;
      }

      .landing-page .flex-container {
        align-items: flex-start;
        display: flex;
        flex-direction: column;
        gap: 10px;
        position: relative;
      }

      .flex-container-14518 {
        height: 110px;
        width: 220px;
      }

      .text {
        font-size: 20px;
        align-self: stretch;
        letter-spacing: 0;
        line-height: normal;
        position: relative;
      }

      .group-30 {
        align-items: flex-start;
        display: flex;
        flex-direction: column;
        gap: 28px;
        min-height: 170px;
        width: 115px;
      }

      .flex-container-14512 {
        height: 110px;
        width: 111px;
      }

      .menu {
        font-weight: bold;
        font-size: 21px;
        letter-spacing: 0;
        line-height: normal;
        min-height: 32px;
      }

      .group-31 {
        align-items: flex-start;
        display: flex;
        flex-direction: column;
        gap: 28px;
        margin-left: 106px;
        min-height: 130px;
        width: 141px;
      }

      .features {
        font-family: "Poppins";
        font-weight: bold;
        font-size: 21px;
        letter-spacing: 0;
        line-height: normal;
        min-height: 32px;
      }

      .flex-container-14516 {
        height: 70px;
        width: 137px;
      }

      .line-1 {
        align-self: flex-end;
        height: 1px;
        margin-right: 1px;
        margin-top: 51px;
        object-fit: cover;
        width: 1228px;
      }

      .copyright-2023-una {
        align-self: center; color: #9b9988;
        font-family: "Poppins";
        font-size: 15px;
        font-weight: 400;
        letter-spacing: 0;
        line-height: normal;
        margin-top: 20px;
        min-height: 23px;
        width: 342px;
      }

      /*---------------ANIMATIONS---------------*/

      .nav-buttons .home:hover,
      .nav-buttons .fsl-translator:hover,
      .nav-buttons .learn:hover,
      .nav-buttons .about:hover,
      .nav-buttons .contact-us:hover {
        color: #ffcc00;
        font-weight: bolder;
      }

      .join-now-button:hover, 
      .get-started-button:hover,
      .translation-try-now:hover {
        background-color: #1b347e;
        font-weight: bolder;
      }

      .add-sign-try-now:hover,
      .learn-now-button:hover {
        background-color: #eebe00;
        font-weight: bolder;
      }

      .elearn-try-now:hover,
      .read-more-button:hover {
        background-color: #aa1c2a;
        font-weight: bolder;
      }

      .submit-now:hover {
        color: #14255a;
        font-weight: bolder;
      }

    </style>
  </head>
  <body>
    <div class="landing-page-screen">
      <div class="navbar">
        <div class="navbar-container"></div>
        <div class="nav-buttons">
          <a href="index.php" class="home">Home</a>
          <div class="fsl-translator">FSL Translator</div>
          <div class="learn-button">
            <div class="learn">Learn</div>
            <img
              class="akar-iconschevron-down"
              src="assets\assets-svg\akar-icons-chevron-down.svg"
            />
          </div>
          <div class="about">About</div>
          <div class="contact-us">Contact Us</div>
        </div>
        <a href="index.php">
          <img class="logo" src="assets\assets-png\logo.png" />
        </a>
        <div class="join-now-button">
          <a href="join.php" class="join-now">JOIN NOW</a>
        </div>
      </div>
    </div>
    <div class="landing-page-1">
      <div class="group-5">
        <h1 class="header">
          <span class="span0">Bridge </span><span class="span1">the </span
          ><span class="span2">Gap</span>
        </h1>
        <p class="are-you-ready-to-bri">
          <span class
            >Are you ready to bridge the communication gap? Introducing</span
          >
          <span class="span1-1">unawa</span>
          <span class
            >, your gateway to seamless interaction between the spoken word and
            the rich tapestry of Filipino Sign Language (FSL).</span
          >
        </p>
        <div class="get-started-button">
        <a href="join.php" class="get-started">GET STARTED</a>
        </div>
      </div>
      <div class="collage">
        <div class="frame-container">
          <div class="frame-14195"></div>
          <div class="frame-14199"></div>
          <div class="frame-14203"></div>
          <div class="frame-14207"></div>
        </div>
        <div class="frame-container">
          <div class="frame-14196"></div>
          <div class="frame-14200"></div>
          <div class="frame-14204"></div>
          <div class="frame-14208"></div>
        </div>
        <div class="frame-container">
          <div class="frame-14197"></div>
          <div class="frame-14201"></div>
          <div class="frame-14205"></div>
          <div class="frame-14209"></div>
        </div>
        <div class="frame-container">
          <div class="frame-14198"></div>
          <div class="frame-14202"></div>
          <div class="frame-14206"></div>
          <div class="frame-14210"></div>
        </div>
      </div>
    </div>
    <div class="landing-page-2">
      <div class="group-17">
        <div class="bridge-voices-connect-worlds">
          Bridge Voices, Connect Worlds
        </div>
        <p class="where-hands-and-voic">
          Where Hands and Voices Converse, Seamlessly
        </p>
      </div>
      <div class="group-container">
        <div class="group-16">
          <div class="group-15">
            <div class="group-6">
              <img class="translator" src="assets\assets-png\translator.png" />
            </div>
            <div class="group-7">
              <div class="translating-silence-into-expression">
                Translating Silence into Expression
              </div>
              <p class="unlock-the-power-of">
                Unlock the power of communication without barriers. Bridge
                spoken language and sign language and foster understanding<br />between
                diverse communities.
              </p>
            </div>
          </div>
          <div class="group-11">
            <div class="group-container-1">
              <div class="group-10">
                <img class="updated" src="assets\assets-png\updated.png" />
              </div>
              <div class="add-sign-try-now">
                <div class="try-now">TRY NOW</div>
              </div>
            </div>
            <div class="group-7-1">
              <div class="hand-signs-in-harmony">Hand Signs in Harmony</div>
              <p class="stay-connected-with">
                Stay connected with the ever-evolving language of signs. Our
                comprehensive gesture collection ensures you're always in sync
                with the latest hand signs.
              </p>
            </div>
          </div>
          <div class="group-14">
            <div class="group-container-2">
              <div class="group-22">
                <div class="group-12">
                  <img class="elearn" src="assets\assets-png\elearn.png" />
                </div>
                <div class="group-13">
                  <div class="learn-and-connect">Learn and Connect</div>
                  <p class="seamless-education">
                    Seamless education, inclusive connection. Our e-learning
                    feature bridges learning and communication, ensuring
                    accessible<br />knowledge for all.
                  </p>
                </div>
              </div>
              <div class="elearn-try-now">
                <div class="try-now-1">TRY NOW</div>
              </div>
            </div>
          </div>
        </div>
        <div class="group-18">
          <div class="translation-try-now">
            <div class="try-now-2">TRY NOW</div>
          </div>
        </div>
      </div>
      <div class="flex-row">
        <img
          class="lp-illustration-1"
          src="assets\assets-png\lp-illustration-1.png"
        />
        <div class="group-20">
          <p class="shape-the-language-expand-the-horizon">
            Shape the Language, Expand the Horizon
          </p>
          <div class="overlap-group3">
            <p class="contribute-to-unawa">
              <span class="poppins-normal-fuscous-gray-25px">Contibute to</span>
              <span class="poppins-bold-fuscous-gray-25px">unawa</span>
              <span class="poppins-normal-fuscous-gray-25px"
                >'s growth by submitting new signs, enriching our diverse
                tapestry of communication, and ensuring everyone's expression is
                heard.</span
              >
            </p>
            <a href="submit-sign.html" class="submit-sign-now">
              <div class="submit-now">Submit Now</div>
              <img class="vector" src="assets\assets-svg\vector.svg" />
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="landing-page-3">
      <div class="lp-container">
        <img class="lp-3-banner" src="assets\assets-png\lp-3-banner.png" />
        <div class="lp-3-content">
          <p class="empower-learning-with-silent-expression">
            Empower Learning with Silent Expression
          </p>
          <p class="discover-the-art-of">
            Discover the art of expression. <b>unawa</b>'s FSL E-Learning
            empowers you to learn Filipino Sign Language at your pace, fostering
            a deeper understanding of culture and communication through
            interactive digital lessons.
          </p>
          <div class="learn-now-button">
            <div class="learn-now poppins-bold-white-24px">LEARN NOW</div>
          </div>
        </div>
      </div>
    </div>
    <div class="landing-page-4">
      <div class="group-25">
        <div class="our-story">Our Story</div>
        <p class="at-unawa-our-journe">
          At <b>unawa</b>, our journey began with a simple yet profound mission:
          to break down barriers of communication and make connections more
          meaningful for everyone. Inspired by the rich tapestry of Filipino
          Sign Language (FSL) and the powerful stories it tells, we embarked on
          a path of innovation and inclusivity. <br /><br />
          <b>unawa</b> is more than a translation system; it's a celebration of
          diversity, a testament to progress, and a reminder that communication
          has the power to unite us all. Join us on this remarkable adventure as
          we pave the way for a world where understanding knows no bounds.
        </p>
        <div class="read-more-button">
          <div class="read-more">READ MORE</div>
        </div>
      </div>
      <img
        class="lp-4-illustration-2-1"
        src="assets\assets-png\lp-4-illustration-2-1.png"
      />
    </div>
    <footer class="footer">
      <div class="overlap-group-3">
        <div class="group-34">
          <div class="group-29">
            <img class="logo-3" src="assets\assets-png\logo-3.png"/>
            <p class="unawa-translates-po">
              UNAWA translates spoken and sign language, fostering inclusive communication with advanced technology.
            </p>
          </div>
          <div class="group-33">
            <div class="group-30">
              <div class="menu">MENU</div>
              <div class="flex-container-14512 flex-container">
                <div class="text">
                  <span>Home</span>
                </div>
                <div class="text">
                  <span>About</span>
                </div>
                <div class="text">
                  <span>Contact Us</span>
                </div>
              </div>
            </div>
            <div class="group-31">
              <div class="features">FEATURES</div>
              <div class="flex-container-14516 flex-container">
                <div class="text">
                  <span>FSL Translator</span>
                </div>
                <div class="text">
                  <span>E-Learn</span>
                </div>
              </div>
            </div>
            <div class="group-32">
              <div class="other">OTHER</div>
              <div class="flex-container-14518 flex-container">
                <div class="text">
                  <span>Terms and Conditions</span>
                </div>
                <div class="text">
                  <span>Privacy Policy</span>
                </div>
                <div class="text">
                  <span>Help Center</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <img class="line-1" src="assets\assets-svg\line-1.svg"/>
        <p class="copyright-2023-una">© Copyright 2023 unawa. All rights reserved.</p>
      </div>
  </body>
</html>
