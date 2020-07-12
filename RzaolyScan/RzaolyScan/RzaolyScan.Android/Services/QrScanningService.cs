using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Android.App;
using Android.Content;
using Android.OS;
using Android.Runtime;
using Android.Views;
using Android.Widget;
using RzaolyScan.Services;
using ZXing.Mobile;
using Xamarin.Forms;


[assembly: Dependency(typeof(RzaolyScan.Droid.Services.QrScanningService))]

namespace RzaolyScan.Droid.Services
{
    public class QrScanningService : IQrScanningService
    {
        public async Task<string> ScanAsync()
        {
            var optionsCustom = new MobileBarcodeScanningOptions();
            var scanner = new MobileBarcodeScanner()
            {
                TopText = "Отсканируйте QR код",
                BottomText = "Олимпиада РЗА",
                
            };
            var scanResult = await scanner.Scan(optionsCustom);
            return scanResult.Text;
        }
    }
}