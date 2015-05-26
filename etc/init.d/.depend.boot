TARGETS = mountkernfs.sh hostname.sh udev keyboard-setup mdadm-raid mountdevsubfs.sh hwclock.sh lvm2 checkroot.sh console-setup mountall.sh mountall-bootclean.sh mountnfs.sh mountnfs-bootclean.sh networking urandom checkfs.sh udev-finish x11-common kmod checkroot-bootclean.sh bootmisc.sh kbd procps screen-cleanup
INTERACTIVE = udev keyboard-setup checkroot.sh console-setup checkfs.sh kbd
udev: mountkernfs.sh
keyboard-setup: mountkernfs.sh udev
mdadm-raid: mountkernfs.sh hostname.sh udev
mountdevsubfs.sh: mountkernfs.sh udev
hwclock.sh: mountdevsubfs.sh
lvm2: mountdevsubfs.sh udev mdadm-raid
checkroot.sh: hwclock.sh keyboard-setup mountdevsubfs.sh hostname.sh
console-setup: mountall.sh mountall-bootclean.sh mountnfs.sh mountnfs-bootclean.sh kbd
mountall.sh: mdadm-raid lvm2 checkfs.sh checkroot-bootclean.sh
mountall-bootclean.sh: mountall.sh
mountnfs.sh: mountall.sh mountall-bootclean.sh networking
mountnfs-bootclean.sh: mountall.sh mountall-bootclean.sh mountnfs.sh
networking: mountkernfs.sh mountall.sh mountall-bootclean.sh urandom procps
urandom: mountall.sh mountall-bootclean.sh hwclock.sh
checkfs.sh: mdadm-raid lvm2 checkroot.sh
udev-finish: udev mountall.sh mountall-bootclean.sh
x11-common: mountall.sh mountall-bootclean.sh mountnfs.sh mountnfs-bootclean.sh
kmod: checkroot.sh
checkroot-bootclean.sh: checkroot.sh
bootmisc.sh: checkroot-bootclean.sh mountall-bootclean.sh mountnfs-bootclean.sh mountall.sh mountnfs.sh udev
kbd: mountall.sh mountall-bootclean.sh mountnfs.sh mountnfs-bootclean.sh
procps: mountkernfs.sh mountall.sh mountall-bootclean.sh udev
screen-cleanup: mountall.sh mountall-bootclean.sh mountnfs.sh mountnfs-bootclean.sh
